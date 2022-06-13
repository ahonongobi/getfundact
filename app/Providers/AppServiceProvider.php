<?php

namespace App\Providers;

use App\Mail\Order;
use App\Mail\ReminderEmail;
use App\Models\Campagne;
use App\Models\Contrubution;
use App\Models\Historique;
use App\Models\Pourcentage;
use App\Models\Profile;
use App\Models\User;
use App\Models\Withdrawal;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //sum montant_cotise by user_id where statut = 1
        $montantCotise = Campagne::where('statut',1)->groupBy('user_id')->selectRaw('sum(montant_cotise) as montant, user_id')->get();
            
        foreach($montantCotise as $montant){
            $montantUser = User::where('id',$montant->user_id)->first();
            $montantUser->solde = $montant->montant;
            $montantUser->update();
            //var_dump($montantUser);
        }

        Paginator::useBootstrap();
        View::composer(['index','invest_dash.index','invest_dash.donation-details','user_dash.donation-details','user_dash.my-campagne','invest_dash.campagne-org','user_dash.index','user_dash.contribution','invest_dash.contribution-org','_layouts._invest','_layouts._user','admin.*','_layouts._admin','user_dash.*','invest_dash.*'], function ($view){
            $montantCotise = Contrubution::groupBy('id_campagnes')->where('states_payment',1)->selectRaw('sum(montant) as montant, id_campagnes')->get();
            foreach($montantCotise as $montant){
                $montantCampagne = Campagne::where('id',$montant->id_campagnes)->first();
                $montantCampagne->montant_cotise = $montant->montant;
                $montantCampagne->update();
                //var_dump($montantCampagne);
            }
            //here we gonna update to 2 campagne when montant_cotise >= montant_v 
            $montantCampagne = Campagne::where('statut',1)->get();
            foreach($montantCampagne as $montant){
                if($montant->montant_cotise >= $montant->montant_v){
                    $montant->statut = 2;
                    $montant->update();
                }
            }
            

            if (Auth::check()) {
                //also calculate 
                $view->with('solde', Auth::user()->solde);
                $view->with('campagnes', Campagne::where('user_id',Auth::user()->id)->get());
                //Paginate all Random campagne 
                
                $view->with('all_campagnes', Campagne::where('statut',1)->paginate(12));
                $view->with('contribution', Contrubution::where('id_author',Auth::user()->id)->where('states_payment',1)->paginate(10));
                $view->with('your_contribution', Contrubution::where('id_user',Auth::user()->id)->where('states_payment',1)->get());

                $view->with('count_your_contribution', Contrubution::where('id_user',Auth::user()->id)->where('states_payment',1)->count());
                $view->with('count_all_campagnes', Campagne::count());
                $view->with('count_your_contribution_amount', Contrubution::where('id_user',Auth::user()->id)->where('states_payment',1)->sum('montant'));

                $view->with('count_contribution_for_you', Contrubution::where('id_author',Auth::user()->id)->where('states_payment',1)->count());
                $view->with('count_all_campagnes', Campagne::where('statut',1)->count());
                $view->with('count_your_contribution_amount_for_you', Contrubution::where('id_author',Auth::user()->id)->where('states_payment',1)->sum('montant'));
                //montant asked for user by all his campagne on campagne table and campagne statut = 1
                $view->with('montant_asked_for_you', Campagne::where('user_id',Auth::user()->id)->where('statut',1)->sum('montant_v'));
                
                //$view->with('check_if_user_complete_profile', Profile::where('user_id',Auth::user()->id)->count());
                $view->with('profile_data', Profile::where('user_id',Auth::user()->id)->first());
                $view->with('email_value', User::where('id',Auth::user()->id)->first());
                $view->with('auth_id', Auth::user()->email);
                // get all from historique table
                $view->with('historique', Historique::all());

                //verify if user completed all fields Profile information using profile table where cni is not null, s_cni is not null, adresse is not null, phone is not null, date_naissance is not null, sexe is not null, nom is not null, prenom is not null iban is not null bic is not null
                $view->with('check_if_user_complete_profile', Profile::where('user_id',Auth::user()->id)->count());

            


            }       
            //admin
            //select all_users from user table from the last inserted to first
            $view->with('all_users', User::orderBy('id','desc')->get());
            //$view->with('all_users', User::orderBy('id','DESC')->get());
            //select all user today registration by DESC
            $view->with('all_users_today', User::whereDate('created_at', date('Y-m-d'))->orderBy('id','desc')->get());
            //select  user that has registered in recent 1 months 
            $view->with('all_users_1months', User::whereBetween('created_at', [date('Y-m-d', strtotime('-1 months')), date('Y-m-d')])->get());
            //select  user that has registered in recent 1 weeks
            $view->with('all_users_1weeks', User::whereBetween('created_at', [date('Y-m-d', strtotime('-1 weeks')), date('Y-m-d')])->get());
            $view->with('count_all_campagne', Campagne::count());
            $view->with('Countall_users', User::count());
            $view->with('todayUser', DB::table('users')->select(DB::raw('*'))
            ->whereRaw('Date(created_at) = CURDATE()')->count());
            $view->with('Count_dispo_amount', Campagne::sum('montant_cotise'));
            
            $view->with('Count_dispo_amount_today', DB::table('campagnes')->select(DB::raw('*'))
            ->whereRaw('Date(created_at) = CURDATE()')->sum('montant_cotise'));
            $view->with('admin_all_campagne_actif', Campagne::where('statut',1)->get());
            $view->with('admin_all_campagne_inactif', Campagne::where('statut',0)->get());
            // all_withdraw order by id desc
            
            $view->with('all_withdraw', Withdrawal::orderBy('id','DESC')->get());
            //withdrawal approved  statut = 1
            $view->with('all_withdraw_approved', Withdrawal::orderBy('id','DESC')->where('statut',1)->get());
            $view->with('all_withdraw_per_day',DB::table('withdrawals')->select(DB::raw('*'))
            ->whereRaw('Date(created_at) = CURDATE()')->get());
            //endadmin
            //paginate all campagne in random order
            $view->with('all_campagnes', Campagne::where('statut',1)->orderByRaw('RAND()')->paginate(6));
            //paginate all campagne
           // $view->with('all_campagnes', Campagne::orderBy('id','DESC')->where('statut',1)->paginate(6));
            $view->with('gallery',Campagne::all());
            //get all montant of withdrawal by user where statut 0
            $view->with('all_withdraw_amount', Withdrawal::where('statut',0)->sum('montant'));
            // get all montant of withdrawal by user
            $view->with('all_withdrawal', Withdrawal::sum('montant'));
            //get last 3 users id function
            $view->with('last_users', User::orderBy('id','DESC')->take(3)->get());

            //get last 3 user where user_type = admin
            $view->with('last_admin', User::where('user_type','Admin')->orderBy('id','DESC')->take(3)->get());
            //get last 3 historique on model historique
            $view->with('last_historique', Historique::orderBy('id','DESC')->take(3)->get());
            // get lastest row record of pourcentage on model pourcentage
            $view->with('last_pourcentage', Pourcentage::orderBy('id','DESC')->first());
            
            if (!(Auth::check())) {
                $view->with('email_value', User::where('email',"sa.intelligencia@gmail.com")->first());
                $view->with('auth_id', "sa.intelligencia@gmail.com");
            }
        
        });
       
        // make X-XSS-Protection,contentTypeOptions,frameOptions, poweredBy,downloadOptions,X-Permitted-Cross-Domain header functionality in all view
        view()->composer('*', function ($view) {
            $view->with('X_XSS_Protection', '1; mode=block');
            $view->with('contentTypeOptions', 'nosniff');
            $view->with('frameOptions', 'SAMEORIGIN');
            $view->with('poweredBy', 'Intelligencia-SI');
            $view->with('downloadOptions', 'noopen');
            $view->with('X_Permitted_Cross_Domain', 'X-Permitted-Cross-Domain');
            //forceSSL  call
            $view->with('forceSSL', function () {
                return [
                    'forceSSL' => true,
                    'httpsPort' => 443,
                    'httpsOnly' => true,
                    'secureCookies' => true,
                    'secureOnly' => true,
                    'secureProxyHeaders' => true,
                    'forceHttps' => true,
                    'redirect' => true,
                    'redirectCode' => 301,
                ];
            });

        });
      //here we send reminder email two day after registration  to all user who has not completed their profile
        view()->composer('*', function ($view) {
            //$this->sendReminderEmail();
            $view->with('reminder_email', User::where('states',0)->where('created_at', '<', Carbon::now()->subDays(2))->get());
        });
           
    }
    //then make sendReminderEmail function
    public function sendReminderEmail(){
        //get all users email two day after registration  to all user who has not completed their profile
        
           $users = User::where('states',0)->where('created_at', '<', Carbon::now()->subDays(2))->get();
              foreach ($users as $user) {
                 // var_dump($user->email);
                 $name = $user->name;
                 $email = $user->email;
                 $message = "Bonjour, vous n'avez pas completé votre profil, veuillez le compléter dans votre espace personnel";
                 $mailable = new Order($name,$email,$message);
                 Mail::to($email)->send($mailable);
               // Mail::to($user->email)->send(new ReminderEmail($user->name,$user->surname,$user->email));
              }             

    }

     //function to force user to https online and not localhost
    public function forceSSL()
    {
        return redirect()->to('https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'])->send();
    }
    // X-XSS-Protection function
    public function xssProtection()
    {
        return response()->header('X-XSS-Protection', '1; mode=block');
    }
    // X-Content-Type-Options function
    public function contentTypeOptions()
    {
        return response()->header('X-Content-Type-Options', 'nosniff');
    }
    // X-Frame-Options function
    public function frameOptions()
    {
        return response()->header('X-Frame-Options', 'SAMEORIGIN');
    }
    // X-Powered-By function
    public function poweredBy()
    {
        return response()->header('X-Powered-By', 'Intelligencia-SI');
    }
    // X-Download-Options function
    public function downloadOptions()
    {
        return response()->header('X-Download-Options', 'noopen');
    }
    // X-Permitted-Cross-Domain-Policies function
    public function permittedCrossDomainPolicies()
    {
        return response()->header('X-Permitted-Cross-Domain-Policies', 'none');
    }                           
    



}

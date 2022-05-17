<?php

namespace App\Providers;

use App\Models\Campagne;
use App\Models\Contrubution;
use App\Models\Historique;
use App\Models\Profile;
use App\Models\User;
use App\Models\Withdrawal;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
                $view->with('all_campagnes', Campagne::where('statut',1)->paginate(12));
                $view->with('contribution', Contrubution::where('id_author',Auth::user()->id)->where('states_payment',1)->paginate(10));
                $view->with('your_contribution', Contrubution::where('id_user',Auth::user()->id)->where('states_payment',1)->get());

                $view->with('count_your_contribution', Contrubution::where('id_user',Auth::user()->id)->where('states_payment',1)->count());
                $view->with('count_all_campagnes', Campagne::count());
                $view->with('count_your_contribution_amount', Contrubution::where('id_user',Auth::user()->id)->where('states_payment',1)->sum('montant'));

                $view->with('count_contribution_for_you', Contrubution::where('id_author',Auth::user()->id)->where('states_payment',1)->count());
                $view->with('count_all_campagnes', Campagne::where('statut',1)->count());
                $view->with('count_your_contribution_amount_for_you', Contrubution::where('id_author',Auth::user()->id)->where('states_payment',1)->sum('montant'));

                $view->with('check_if_user_complete_profile', Profile::where('user_id',Auth::user()->id)->count());
                $view->with('profile_data', Profile::where('user_id',Auth::user()->id)->first());
                $view->with('email_value', User::where('id',Auth::user()->id)->first());
                $view->with('auth_id', Auth::user()->email);
                // get all from historique table
                $view->with('historique', Historique::all());


            }       
            //admin
            $view->with('all_users', User::orderBy('id','DESC')->paginate(20));
            $view->with('count_all_campagne', Campagne::count());
            $view->with('Countall_users', User::count());
            $view->with('todayUser', DB::table('users')->select(DB::raw('*'))
            ->whereRaw('Date(created_at) = CURDATE()')->count());
            $view->with('Count_dispo_amount', Campagne::sum('montant_cotise'));
            
            $view->with('Count_dispo_amount_today', DB::table('campagnes')->select(DB::raw('*'))
            ->whereRaw('Date(created_at) = CURDATE()')->sum('montant_cotise'));
            $view->with('admin_all_campagne_actif', Campagne::where('statut',1)->paginate(10));
            $view->with('admin_all_campagne_inactif', Campagne::where('statut',0)->paginate(10));

            $view->with('all_withdraw', Withdrawal::paginate(20));
            $view->with('all_withdraw_per_day',DB::table('withdrawals')->select(DB::raw('*'))
            ->whereRaw('Date(created_at) = CURDATE()')->paginate(20));
            //endadmin
            $view->with('all_campagnes', Campagne::where('statut',1)->paginate(12));
            $view->with('gallery',Campagne::all());
            //get all montant of withdrawal by user where statut 0
            $view->with('all_withdraw_amount', Withdrawal::where('statut',0)->sum('montant'));
            // get all montant of withdrawal by user
            $view->with('all_withdrawal', Withdrawal::sum('montant'));
            //get last 3 users id function
            $view->with('last_users', User::orderBy('id','DESC')->take(3)->get());

            $view->with('last_users', );

            
            if (!(Auth::check())) {
                $view->with('email_value', User::where('email',"sa.intelligencia@gmail.com")->first());
                $view->with('auth_id', "sa.intelligencia@gmail.com");
            }
            



        });
    }
}

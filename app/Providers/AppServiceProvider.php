<?php

namespace App\Providers;

use App\Models\Campagne;
use App\Models\Contrubution;
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

        Paginator::useBootstrap();
        View::composer(['index','invest_dash.index','invest_dash.donation-details','user_dash.donation-details','user_dash.my-campagne','invest_dash.campagne-org','user_dash.index','user_dash.contribution','invest_dash.contribution-org','_layouts._invest','_layouts._user','admin.*','_layouts._admin','user_dash.*','invest_dash.*'], function ($view){
            $montantCotise = Contrubution::groupBy('id_campagnes')->where('states_payment',1)->selectRaw('sum(montant) as montant, id_campagnes')->get();
            foreach($montantCotise as $montant){
                $montantCampagne = Campagne::where('id',$montant->id_campagnes)->first();
                $montantCampagne->montant_cotise = $montant->montant;
                $montantCampagne->update();
                //var_dump($montantCampagne);
            }
            if (Auth::check()) {
                $view->with('campagnes', Campagne::where('user_id',Auth::user()->id)->get());
                $view->with('all_campagnes', Campagne::paginate(10));
                $view->with('contribution', Contrubution::where('id_author',Auth::user()->id)->paginate(10));
                $view->with('your_contribution', Contrubution::where('id_user',Auth::user()->id)->get());

                $view->with('count_your_contribution', Contrubution::where('id_user',Auth::user()->id)->count());
                $view->with('count_all_campagnes', Campagne::count());
                $view->with('count_your_contribution_amount', Contrubution::where('id_user',Auth::user()->id)->sum('montant'));

                $view->with('count_contribution_for_you', Contrubution::where('id_author',Auth::user()->id)->count());
                $view->with('count_all_campagnes', Campagne::count());
                $view->with('count_your_contribution_amount_for_you', Contrubution::where('id_author',Auth::user()->id)->sum('montant'));

                $view->with('check_if_user_complete_profile', Profile::where('user_id',Auth::user()->id)->count());
                $view->with('profile_data', Profile::where('user_id',Auth::user()->id)->first());
                $view->with('email_value', User::where('id',Auth::user()->id)->first());
                $view->with('auth_id', Auth::user()->email);
                


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
            
            if (!(Auth::check())) {
                $view->with('email_value', User::where('email',"sa.intelligencia@gmail.com")->first());
                $view->with('auth_id', "sa.intelligencia@gmail.com");
            }


        });
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\State;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $state = State::all();
         view()->share([
            'state'          => $state
        ]);  
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /**
         * Resolving dependencies of service classes
         */
        # UserService's dependencies
        $this->app->when('App\Services\UserService')
            ->needs('App\Interfaces\UpdateInterface')
            ->give('App\Repositories\UserRepository');

        # StateService's dependencies
        $this->app->when('App\Services\StateService')
            ->needs('App\Interfaces\ShowAllInterface')
            ->give('App\Repositories\StateRepository');

        # StoreService's dependencies
        $this->app->when('App\Services\StoreService')
            ->needs('App\Interfaces\ShowAllInterface')
            ->give('App\Repositories\StoreRepository');

        # RetailerContactService's dependencies
        $this->app->when('App\Services\RetailerContactService')
            ->needs('App\Interfaces\ShowAllInterface')
            ->give('App\Repositories\RetailerContactRepository');

        # ProductGalleryService's dependencies
        $this->app->when('App\Services\ProductGalleryService')
            ->needs('App\Interfaces\SaveInterface')
            ->give('App\Repositories\ProductGalleryRepository');

        # PaymentService's dependencies
        $this->app->when('App\Services\Payments\PaymentService')
            ->needs('App\Interfaces\PaymentIntegrationInterface')
            ->give('App\Services\Payments\PaypalIntegration');

        # OrderPaymentService's dependencies
        $this->app->when('App\Services\OrderPaymentService')
            ->needs('App\Interfaces\SaveInterface')
            ->give('App\Repositories\OrderPaymentRepository');

        /**
         * Resolving dependencies of controller classes
         */
        # UserController' dependencies
        $this->app->when('App\Http\Controllers\UserController')
            ->needs('App\Services\Validations\Validator')
            ->give('App\Services\Validations\UserValidation');

        # StoreController' dependencies
        $this->app->when('App\Http\Controllers\StoreController')
            ->needs('App\Services\Validations\Validator')
            ->give('App\Services\Validations\StoreValidation');

        # StoreSearchController' dependencies
        $this->app->when('App\Http\Controllers\StoreSearchController')
            ->needs('App\Services\Validations\Validator')
            ->give('App\Services\Validations\StoreSearchValidation');

        # RetailerContactController' dependencies
        $this->app->when('App\Http\Controllers\RetailerContactController')
            ->needs('App\Services\Validations\Validator')
            ->give('App\Services\Validations\RetailerContactValidation');

        # ProductController' dependencies
        $this->app->when('App\Http\Controllers\ProductController')
            ->needs('App\Services\Validations\Validator')
            ->give('App\Services\Validations\ProductValidation');

        # TestomonialController' dependencies
        $this->app->when('App\Http\Controllers\TestomonialController')
            ->needs('App\Services\Validations\Validator')
            ->give('App\Services\Validations\TestomonialValidation');

        # TransactionController' dependencies
        $this->app->when('App\Http\Controllers\TransactionController')
            ->needs('App\Services\Validations\Validator')
            ->give('App\Services\Validations\TransactionValidation');

        # TransactionController' dependencies
        $this->app->when('App\Http\Controllers\TransactionController')
            ->needs('App\Interfaces\PaymentInterface')
            ->give('App\Services\Payments\PaymentService');

        # FaqController' dependencies
        $this->app->when('App\Http\Controllers\FaqController')
            ->needs('App\Services\Validations\Validator')
            ->give('App\Services\Validations\FaqValidation');

        # SettingController' dependencies
        $this->app->when('App\Http\Controllers\SettingController')
            ->needs('App\Services\Validations\Validator')
            ->give('App\Services\Validations\SettingValidation');
    }
}

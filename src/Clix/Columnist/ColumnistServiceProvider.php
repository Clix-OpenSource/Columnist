<?php

    namespace Clix\Columnist;

    use Illuminate\Support\ServiceProvider;
    use Clix\Columnist\View\LaravelView;

    class ColumnistServiceProvider extends ServiceProvider
    {

        protected $defer = false;


        public function register()
        {

            $this->app->singleton('columnist', function () {
                return new Columnist(new LaravelView());
            });

        }

        public function provides()
        {
            return ['columnist'];
        }

    }

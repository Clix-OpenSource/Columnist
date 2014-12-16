<?php

    namespace Clix\Columnist;

    use Illuminate\Support\ServiceProvider;
    use Illuminate\Foundation\AliasLoader;

    class ColumnistServiceProvider extends ServiceProvider
    {

        protected $defer = false;


        public function register()
        {
            // TODO: Implement register() method.
        }

        public function boot()
        {
            $this->package("clix/columnist");
            AliasLoader::getInstance()->alias('Columnist', 'Clix\Columnist\Columnist');
        }

        public function provides()
        {
            return array();
        }

    }

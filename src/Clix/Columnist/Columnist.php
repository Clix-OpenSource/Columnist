<?php

    namespace Clix\Columnist;

    use Clix\Columnist\Contracts\View;

    class Columnist
    {

        private $view;

        function __construct(View $view)
        {
            $this->view = $view;
        }


        public function createPage($pageName)
        {
            return $pageName;
        }

    }

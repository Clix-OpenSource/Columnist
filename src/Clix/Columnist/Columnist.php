<?php

    namespace Clix\Columnist;

    use Clix\Columnist\Contracts\Database;
    use Clix\Columnist\Contracts\View;

    /**
     * Class Columnist
     * @package Clix\Columnist
     * @author Simon Skinner <s.skinner@clix.co.uk>
     * @since ${DATE}
     */
    class Columnist
    {

        /**
         * @var View
         */
        protected $view;

        /**
         * @var null
         */
        protected $pageSlug;

        protected $page;

        protected $database;

        function __construct($pageSlug = null, View $view, Database $database)
        {
            $this->pageSlug = $pageSlug;
            $this->view     = $view;
            $this->database = $database;
        }

        /**
         * @return null
         * @author Simon Skinner <s.skinner@clix.co.uk>
         */
        public function createPage()
        {
            $this->page = new Page($this->view, $this->database);
            return $this->page;
        }

    }

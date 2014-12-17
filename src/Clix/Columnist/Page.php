<?php namespace Clix\Columnist;

use Clix\Columnist\Contracts\Database;
use Clix\Columnist\Contracts\View;

class Page
{

    protected $pageSlug;

    protected $view;

    protected $database;

    function __construct(View $view, Database $database)
    {
        $this->view     = $view;
        $this->database = $database;
    }


    /**
     * @return mixed
     */
    public function getPageSlug()
    {
        return $this->pageSlug;
    }

    /**
     * @param mixed $pageSlug
     */
    public function setPageSlug($pageSlug)
    {
        $this->pageSlug = $pageSlug;
        return $this;
    }


    public function render()
    {
        return "content goes here";
    }


    private function getSections()
    {

    }

}

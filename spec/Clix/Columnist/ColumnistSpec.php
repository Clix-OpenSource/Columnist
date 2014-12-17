<?php

namespace spec\Clix\Columnist;

use Clix\Columnist\Contracts\Database;
use Clix\Columnist\Contracts\View;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ColumnistSpec extends ObjectBehavior
{

    function let(View $view, Database $database) {
        $this->beConstructedWith('foo', $view, $database);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Clix\Columnist\Columnist');
    }

    function it_should_return_a_page_object_when_createPage_is_called()
    {
        $this->createPage()->shouldReturnAnInstanceOf('Clix\Columnist\Page');
    }

}

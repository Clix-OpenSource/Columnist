<?php

namespace spec\Clix\Columnist;

use Clix\Columnist\Contracts\Database;
use Clix\Columnist\Contracts\View;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PageSpec extends ObjectBehavior
{
    function let(View $view, Database $database)
    {
        $this->beConstructedWith($view, $database);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Clix\Columnist\Page');
    }

    function it_should_be_able_to_set_the_page_slug() {
        $this->setPageSlug('foo');
        $this->getPageSlug()->shouldReturn('foo');
    }

    function it_should_be_able_to_render_the_content() {
        $this->render()->shouldBeString();
    }

}

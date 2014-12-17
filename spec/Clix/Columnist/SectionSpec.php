<?php

namespace spec\Clix\Columnist;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SectionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Clix\Columnist\Section');
    }
}

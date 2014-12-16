<?php namespace Clix\Columnist\Contracts;

/**
 * Interface View
 * @package Clix\Columnist\Contracts
 * @author Simon Skinner <s.skinner@clix.co.uk>
 */
interface View
{

    /**
     * @param array $var
     * @return mixed
     * @author Simon Skinner <s.skinner@clix.co.uk>
     */
    public function setVariables(array $var);

    /**
     * @param string $template
     * @return mixed
     * @author Simon Skinner <s.skinner@clix.co.uk>
     */
    public function setTemplate($template);

    /**
     * @return mixed
     * @author Simon Skinner <s.skinner@clix.co.uk>
     */
    public function render();

} 

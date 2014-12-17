<?php namespace Clix\Columnist\Contracts;

/**
 * Interface Database
 * @package Clix\Columnist\Contracts
 * @author Simon Skinner <s.skinner@clix.co.uk>
 */
interface Database
    {

    /**
     * @return mixed
     * @author Simon Skinner <s.skinner@clix.co.uk>
     */
    public function select();

    /**
     * @return mixed
     * @author Simon Skinner <s.skinner@clix.co.uk>
     */
    public function update();

    /**
     * @return mixed
     * @author Simon Skinner <s.skinner@clix.co.uk>
     */
    public function insert();

    /**
     * @return mixed
     * @author Simon Skinner <s.skinner@clix.co.uk>
     */
    public function delete();

    }

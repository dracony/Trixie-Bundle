<?php

namespace Dracony;

class Trixie extends \PHPixie\DefaultBundle
{
    protected function buildBuilder($frameworkBuilder)
    {
        return new Trixie\Builder($frameworkBuilder);
    }
    
    public function name()
    {
        return 'trixie';
    }
}
<?php

namespace Dracony\Trixie\HTTPProcessors;

class Greet extends \PHPixie\DefaultBundle\Processor\HTTP\Actions
{
    protected $template;
    
    public function __construct($template)
    {
        $this->template = $template;
    }
    
    public function defaultAction($request)
    {
        $container = $this->template->get('trixie:greet');
        $container->message = "Have fun coding!";
        return $container;
    }
}
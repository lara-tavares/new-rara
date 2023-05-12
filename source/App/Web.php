<?php

namespace Source\App;

use League\Plates\Engine;
class Web
{
    private $view;

    public function __construct()
    {
        $this->view = new Engine(CONF_VIEW_WEB,'php');
    }

    public function home () : void 
    {
        echo $this->view->render("home");

    }

    public function product () : void 
    {
        echo $this->view->render("product");

    }

    public function contact () : void 
    {
        echo $this->view->render("contact");

    }

    public function about () : void 
    {
        echo $this->view->render("about");

    }

    public function testimonial () : void 
    {
        echo $this->view->render("testimonial");

    }

}
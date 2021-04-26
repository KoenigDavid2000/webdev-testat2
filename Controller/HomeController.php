<?php

require_once("controller.php");
require_once("view/view.php");
require_once("view/homeview.php");

class HomeController extends Controller {

    public function  __construct($request) {
        parent::__construct($request);

        $this->view = new HomeView();
    }
}
<?php

require_once __DIR__ . '/Controller.php';

class PagesController extends Controller {

    public function index() {
        $this->set('title', 'Home');
        $this->set('currentPage', 'home');
    }

    public function detail() {
        $this->set('title', 'Detail');
        $this->set('currentPage', 'detail');
    }

}

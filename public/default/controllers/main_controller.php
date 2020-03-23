<?php

class Main extends AbstractController
{

    public function index()
    {
        $this->page(1);
    }

    public function page($number)
    {
        $this->loadModel('ModelMain');
        $notes = $this->ModelMain->getDiscutionByPage($number);
        $this->render('index', compact('notes'));

    }

}
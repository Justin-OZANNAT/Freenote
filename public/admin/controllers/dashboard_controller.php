<?php

class Dashboard extends AbstractController
{

    public function index()
    {
        $this->setAdminTheme();
        $this->loadModel('ModelDashboard');
        $this->render('index');
    }

}
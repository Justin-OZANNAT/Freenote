<?php

class ModelAccount extends AbstractModel
{

    public function __construct()
    {
        App::getAuth()->restrict();
        $this->table = 'USER';
        $this->getConnection();
    }

}
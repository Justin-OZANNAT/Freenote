<?php


class ModelMain extends AbstractModel
{

    public function __construct()
    {
        $this->table = "DISCUSSION";
        $this->getConnection();
    }

    public function getDiscutionByPage($page)
    {
        $query = $this->_connexion->query('SELECT * FROM ' . $this->table . ' LIMIT ' . intval($page - 1) . ', ' . intval($page + 1));
        return $query->fetch(PDO::FETCH_ASSOC);
    }

}
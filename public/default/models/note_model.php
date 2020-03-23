<?php


class ModelNote extends AbstractModel
{

    public function __construct()
    {
        App::getAuth()->restrict();
        $this->table = "DISCUSSION";
        $this->getConnection();
    }

    public function findBySlug($slug)
    {
        $query = $this->_connexion->query('SELECT * FROM ' . $this->table . ' WHERE slug = ?', [htmlentities($slug)]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function findMessages($noteId)
    {
        $query = $this->_connexion->query('SELECT * FROM MESSAGE WHERE id_dis = ?', [intval(htmlentities($noteId))]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        for ($i = 0; $i < count($result); ++$i)
            $result[$i]['words'] = $this->findWords($result[$i]['id']);
        return $result;
    }

    private function findWords($msgId)
    {
        $query = $this->_connexion->query('SELECT * FROM WORD WHERE id_mes = ?', [intval(htmlentities($msgId))]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getDate($date)
    {
        return $this->_connexion->query('SELECT DATE_FORMAT(?, \'%c %b\') AS myDate', [$date])->fetch(PDO::FETCH_OBJ)->myDate;
    }

}
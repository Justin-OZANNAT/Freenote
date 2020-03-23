<?php

abstract class AbstractModel
{
    // Propriété qui contiendra l'instance de la connexion
    protected $_connexion;

    // Propriétés permettant de personnaliser les requêtes
    public $table;
    public $id;

    /**
     * Fonction d'initialisation de la base de données
     *
     * @return void
     */
    public function getConnection()
    {
        $this->_connexion = App::getDatabase(DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME, DATABASE_HOST);
    }

    /**
     * Méthode permettant d'obtenir un enregistrement de la table choisie en fonction d'un id
     *
     * @return void
     */
    public function getOne()
    {
        $query = $this->_connexion->query('SELECT * FROM ' . $this->table . ' WHERE id = ?' [$this->id]);
        return $query->fetch();
    }

    /**
     * Méthode permettant d'obtenir tous les enregistrements de la table choisie
     *
     * @return void
     */
    public function getAll()
    {
        $query = $this->_connexion->query('SELECT * FROM ' . $this->table);
        return $query->fetchAll();
    }
}
<?php

abstract class AbstractController
{

    protected $theme = 'default';

    /**
     * Afficher une vue
     *
     * @param string $fichier
     * @param array $data
     * @param string $layout
     * @return void
     */
    public function render($fichier, $data = [], $layout = 'default')
    {
        extract($data);
        ob_start();
        require_once PATH_REQUIRE . WEBROOT . $this->theme . '/views/' . strtolower(get_class($this)) . '/' . $fichier . '_view.php';
        $content = ob_get_clean();
        require_once PATH_REQUIRE . WEBROOT . $this->theme . '/views/layout/' . $layout . '.php';
    }

    /**
     * Permet de charger un modèle
     *
     * @param string $model
     * @return void
     */
    public function loadModel($model)
    {
        require_once PATH_REQUIRE . WEBROOT . $this->theme . '/models/' . strtolower(str_replace('Model', '', $model)) . '_model.php';
        $this->$model = new $model();
    }

    public function setAdminTheme()
    {
        $this->theme = 'admin';
    }
}
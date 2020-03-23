<?php

// --------------------------- //
// -----   CONSTANTS   ------- //
// --------------------------- //

require_once 'config/config.php';

// --------------------------- //
// -------   ROUTE   --------- //
// --------------------------- //

// Route::params($_GET['page'])->admin($_GET['admin']);

// --------------------------- //
// --------    MVC    -------- //
// --------------------------- //

require_once PATH_REQUIRE . 'app/app.php';

$subD = explode('.', $_SERVER['HTTP_HOST'])[0];

$theme = ($subD == 'admin' ? 'admin' : 'default');

$params = explode('/', $_GET['page']);

// DEBUG //
App::flashes($session, $theme);

if(!empty($params[0])) {

    $controller = ucfirst(strtolower($params[0]));
    $action = isset($params[1]) ? strtolower(htmlentities(htmlspecialchars($params[1]))) : 'index';

    $controllers = scandir( PATH_REQUIRE . WEBROOT . $theme . '/controllers/');

    if (!in_array(strtolower($controller) . '_controller.php', $controllers)) {
        http_response_code(404);
        echo "La page recherchée n'existe pas";
        // TODO Page 404
    } else {
        // On appelle le contrôleur
        require_once PATH_REQUIRE . WEBROOT . $theme . '/controllers/' . strtolower($controller) . '_controller.php';

        // On instancie le contrôleur
        $controller = new $controller();

        if(method_exists($controller, $action)){
            unset($params[0]);
            unset($params[1]);
            call_user_func_array([$controller, $action], $params);
            // On appelle la méthode
            //$controller->$action();
        }else{
            // On envoie le code réponse 404
            http_response_code(404);
            echo "La page recherchée n'existe pas";
            // TODO Page 404
        }
    }
} else {
    // Ici aucun paramètre n'est défini
    // On appelle le contrôleur par défaut
    require_once PATH_REQUIRE . WEBROOT . $theme . '/controllers/' . ($theme == 'admin' ? 'dashboard' : 'main') . '_controller.php';

    // On instancie le contrôleur
    $controller = ($theme == 'admin' ? new Dashboard : new Main());

    // On appelle la méthode index
    $controller->index();
}
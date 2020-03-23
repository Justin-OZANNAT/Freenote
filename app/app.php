<?php

require_once 'autoload.php';

require_once PATH_REQUIRE . 'config/db.php';

//require_once 'functions.php';

// TODO Session, Cookie, Auth, Disconnect, etc..

$session = Session::getInstance();

$auth = App::getAuth($session);
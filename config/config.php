<?php

// --------------------------- //
// ---   ERRORS DISPLAY   ---- //
// --------------------------- //

//!\\ A enlever lors du déploiement
error_reporting(E_ALL | E_STRICT); // Only Dev
ini_set('display_errors', true); // Only Dev

// --------------------------- //
// ------   SESSIONS   ------- //
// --------------------------- //

ini_set('session.cookie_lifetime', false);


// --------------------------- //
// -----   CONSTANTS   ------- //
// --------------------------- //

// Paths
define('PATH_REQUIRE', substr($_SERVER['SCRIPT_FILENAME'], 0, -9)); // Pour fonctions d'inclusion php
define('PATH', substr($_SERVER['PHP_SELF'], 0, -9)); // Pour fichier serveur
define('WEBROOT', 'public/'); // Pour images, fichiers etc (html)

// Author informations
define('WEBSITE_AUTHOR', 'MachuDev');
define('WEBSITE_AUTHOR_MAIL', 'contact@machudev.net');

// Website informations
define('WEBSITE_NAME', 'Freenote');
define('WEBSITE_TITLE', WEBSITE_NAME . ' | Le client de messagerie collaboratif !');
define('WEBSITE_URL', 'http://freenote.machudev.net/');
define('WEBSITE_DESCRIPTION', 'Lorem Ispsum');
define('WEBSITE_KEYWORDS', '');
define('WEBSITE_LANGUAGE', 'fr');

// Website admin code
define('ADMIN_PAGE_CODE', 2729);

// Facebook Open Graph tags
define('WEBSITE_FACEBOOK_NAME', WEBSITE_TITLE);
define('WEBSITE_FACEBOOK_DESCRIPTION', WEBSITE_DESCRIPTION);
define('WEBSITE_FACEBOOK_URL', WEBSITE_URL);
define('WEBSITE_FACEBOOK_IMAGE', WEBSITE_URL.'public/assets/medias/images/logo.jpg');

// Email informations
define('EMAIL_SMTP', '');
define('EMAIL_IMAP', '');
define('EMAIL_USER', '');
define('EMAIL_PASSWORD', '');

// Website crypt methods
define('CRYPT_KEY_RANDOM', uniqid(mt_rand(), true));
define('CRYPT_KEY_SALT', 'lE r@nd0M du s!te fr€€N0t3 est trè!s ra||dômEU :D');
define('CRYPT_KEY_METHODS', 'sha256');

// DataBase informations
define('DATABASE_HOST', 'mysql-freenoteiut.alwaysdata.net');
define('DATABASE_NAME', 'freenoteiut_freenote');
define('DATABASE_USER', '191413');
define('DATABASE_PASSWORD', 'freenote*123');

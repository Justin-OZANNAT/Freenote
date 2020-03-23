<?php

class Auth
{

    private $session;
    private $bdd;
    private $error = [];
    private $table;

    public function __construct($session, $bdd, $table = 'USER')
    {
        $this->session = $session;
        $this->bdd = $bdd;
        $this->table = $table;
    }

    public function connect($user)
    {
        $this->session->write($user, 'auth');
    }

    public function login($email, $password, $remember = false)
    {
        $user = $this->bdd->query('SELECT * FROM ' . $this->table . ' WHERE email = :email', [':email' => trim(htmlspecialchars(htmlentities($email)))])->fetch();
        if (!empty($user) && App::decrypt(htmlentities($password), $user['password'])) {
            $this->connect($user);
            if ($remember) {
                // Set cookie variables
                $value = App::encryptCookie($user['id']);
                setcookie("rememberme", $value, time() + (10 * 365 * 24 * 60 * 60));
            }
            App::redirect(WEBSITE_URL . "account");
        } else {
            $erreur = 'Email ou mot de passe incorrect.';
            array_push($this->error, ['type' => 'danger', 'msg' => $erreur]);
            $this->session->setFlash($this->error);
            return false;
        }
    }

    public function register($post)
    {

        if (isset($post['pseudo']) && !empty($post['pseudo'])) {
            $pseudo = trim(htmlspecialchars(($post['pseudo'])));
        } else {
            $erreur = 'Veuillez renseigner un pseudonyme.';
            array_push($this->error, ['type' => 'danger', 'msg' => $erreur]);
            $this->session->setFlash($this->error);
        }

        if (isset($post['email']) && !empty($post['email'])) {
            $email = trim(htmlspecialchars(($post['email'])));
        } else {
            $erreur = 'Veuillez renseigner une adresse email.';
            array_push($this->error, ['type' => 'danger', 'msg' => $erreur]);
            $this->session->setFlash($this->error);
        }

        if (filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
            $email_valid = true;
        } else {
            $erreur = 'L\'email n\'est pas valide. Ex: example@example.com';
            array_push($this->error, ['type' => 'danger', 'msg' => $erreur]);
            $this->session->setFlash($this->error);
        }

        if (isset($post['password']) && !empty($post['password'])) {
            $password = $post['password'];
        } else {
            $erreur = 'Veuillez renseigner un mot de passe.';
            array_push($this->error, ['type' => 'danger', 'msg' => $erreur]);
            $this->session->setFlash($this->error);
        }

        if ($post['password'] == $post['cpassword']) {
            $confirmed = true;
        } else {
            $erreur = 'Les deux mots de passes ne correspondent pas. Veuillez entrer les mêmes.';
            array_push($this->error, ['type' => 'danger', 'msg' => $erreur]);
            $this->session->setFlash($this->error);
        }

        if (isset($pseudo, $email, $email_valid, $password, $confirmed) && $confirmed && $email_valid) {
            $testemail = $this->bdd->query('SELECT * FROM ' . $this->table . ' WHERE email = :email', [':email' => $email]);
            $emailtest = $this->bdd->countResult();
            if ($emailtest > 0) {
                $erreur = 'L\'email renseignée est déjà utilisée.';
                array_push($this->error, ['type' => 'danger', 'msg' => $erreur]);
                $this->session->setFlash($this->error);
            } else {
                $password = App::encrypt($password);
                $user = $this->bdd->query('INSERT INTO `USER`(`username`, `email`, `password`) VALUES (:pseudo, :email, :password)',
                    [
                        ':pseudo' => $pseudo,
                        ':email' => $email,
                        ':password' => $password
                    ]);

                if (!$user) {
                    $erreur = 'Erreur MySQL, veuillez réessayer.';
                    array_push($this->error, ['type' => 'danger', 'msg' => $erreur]);
                    $this->session->setFlash($this->error);
                }
                if ($user) {
                    // TODO Send email ??
                    $this->session->setFlash([['type' => 'success', 'msg' => 'Votre compte vient d\'être créé. Vous pouvez à présent vous connecter.']]);
                    App::redirect(WEBSITE_URL . 'index#auth');
                } else {
                    $erreur = 'Erreur MySQL, veuillez réessayer.';
                    array_push($this->error, ['type' => 'danger', 'msg' => $erreur]);
                    $this->session->setFlash($this->error);
                }
            }

        }
    }

    private function getReferralCode()
    {
        return substr(md5(sha1(mt_rand() . uniqid())), 0, 7);
    }

    private function getTokenCode()
    {
        return substr(str_shuffle(md5(time()) . '$qwertzuiopasdfghjklyxcvbnmQWERTZUIOPASDFGHJKLYXCVBNM0123456789'), 0, 20);
    }

    public function forget($db, $username, $email)
    {
        // TODO mot de passe oublié
        return false;
    }

    public function restrict()
    {
        if (!$this->session->read('auth')) {
            array_push($this->error, ['type' => 'danger', 'msg' => 'Vous devez être connecté pour accéder à cette page.']);
            $this->session->setFlash($this->error);
            App::redirect(WEBSITE_URL . 'main#auth');
            exit();
        }
    }


    public function authed()
    {
        if ($this->session->read('auth')) {
            App::redirect(WEBSITE_URL . 'account');
            exit();
        }
    }

    public function onlyAdmin()
    {
        if ($_SESSION['auth']['group_user'] != 2) {
            $erreur = 'Vous n\'avez pas le droit d\'accéder à cette page.';
            array_push($this->error, ['type' => 'danger', 'msg' => $erreur]);
            $this->session->setFlash($this->error);
            if (!$this->session->read('auth'))
                App::redirect(WEBSITE_URL . 'index#auth');
            else
                App::redirect(WEBSITE_URL . 'account');
            exit();
        }
    }

    public function isAdmin()
    {
        return $_SESSION['auth']['admin'] == 2;
    }

    public function disconnect()
    {
        session_unset();
    }

    public function setTable($table)
    {
        $this->table = $table;
    }

}

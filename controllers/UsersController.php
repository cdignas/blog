<?php

class UsersController extends Controller {

    public function index() {
        require(ROOT . 'models/User.php');
        $users = new User();
        $params = [
            'users' => $users->viewAll(),
        ];
        $this->set($params);
        $this->render('index');
    }

    public function create() {
        if (isset($_POST['username']) && !empty($_POST['username'])
            && isset($_POST['email']) && !empty($_POST['email'])
            && isset($_POST['password']) && !empty($_POST['password'])) {
            require(ROOT . 'models/User.php');
            $user = new User();
            $password = md5($_POST['password']);

            if ($user->create($_POST['username'], $_POST['email'], $password)) {
                header("Location: " . WEBROOT . "users/index");
            }
        }

        $this->render("create");
    }

}
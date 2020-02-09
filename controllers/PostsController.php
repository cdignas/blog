
<?php

class PostsController extends Controller {

    public function index() {
        require(ROOT . 'models/Post.php');
        $posts = new Post();
        $params = [
            'posts' => $posts->viewAll(),
        ];
        $this->set($params);
        $this->render('index');
    }

    public function view($id) {
        require(ROOT . 'models/Post.php');
        $post = new Post();
        $params = [
            'post' => $post->view($id),
        ];
        $this->set($params);
        $this->render('view');
    }

    public function edit($id) {
        require(ROOT . 'models/Post.php');
        $post = new Post();
        $params = [
            'post' => $post->view($id),
        ];

        if (isset($_POST['title']) && !empty($_POST['title']) && isset($_POST['text']) && !empty($_POST['text'])) {
            if ($post->edit($id, $_POST['title'], $_POST['text'])) {
                header("Location: " . WEBROOT . "posts/index");
            }
        }

        $this->set($params);
        $this->render('edit');
    }

    public function create() {
        if (isset($_POST['title']) && !empty($_POST['title']) && isset($_POST['text']) && !empty($_POST['text'])) {
            require(ROOT . 'models/Post.php');
            $post = new Post();

            if ($post->create($_POST['title'], $_POST['text'])) {
                header("Location: " . WEBROOT . "posts/index");
            }
        }

        $this->render("create");
    }

}
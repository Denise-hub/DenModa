<?php
    class Admins extends Controller {
     public $credentials = 'den@admin';
    public function __construct() {
        $this->adminModel = $this->model('Admin');
    }
    public function admin() {
        $data = [
            'title' => "Admin Login Page"
        ];
        $this->view('pages/admin_login', $data);
    }
    public function auth(string $pass)
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['pass'])) {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $pass = trim($_POST['pass']);
            if($pass === $this->credentials ) {
                setcookie('admin', 'isAdmin', time() + 600);
                $this->view('pages/admin_login');
            } else {
                die('Fake credentials! Try later');
            }
        } else {
            $this->view('pages/index');
        }
        
    }
}
?>
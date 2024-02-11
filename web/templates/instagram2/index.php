<?php
header('Location: ./login.php');
exit

require_once 'model.php';

$model = new Model();
$model->processFormData();
?>

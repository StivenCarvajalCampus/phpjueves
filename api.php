<?php
header("Content-Type: application/json");
$_DATA = json_decode(file_get_contents("php://input"),true);
$_METHOD = $_SERVER["REQUEST_METHOD"];
var_dump(apache_request_headers());
$_HEADERS = apache_request_headers();
var_dump($_HEADERS);
/*var_dump($_POST);
var_dump($_FILES);

move_uploaded_file($_FILES["archivo"]["tmp_name"],"img/Img");
echo '<a href="index.html">atras</a>';
*/
?>
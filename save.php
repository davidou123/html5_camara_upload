<?php
$data = $_POST["facedd"];//'data:image/png;base64,AAAFBfj42Pj4';

list($type, $data) = explode(';', $data);
list(, $data)      = explode(',', $data);
$data = base64_decode($data);

file_put_contents('upload/image.png', $data);

?>
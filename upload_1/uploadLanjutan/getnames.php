<?php

include 'crudUpload.php';

echo json_encode(getImgArteById($_GET['id']));

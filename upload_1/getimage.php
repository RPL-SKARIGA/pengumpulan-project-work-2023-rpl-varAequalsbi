<?php

include "crudUpload.php";

echo json_encode(getImgById($_GET['id']));


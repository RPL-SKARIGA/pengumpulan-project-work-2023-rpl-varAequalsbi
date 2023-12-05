<?php

include 'crudUpload.php';

echo json_encode(getWeaponImgById($_GET['id']));

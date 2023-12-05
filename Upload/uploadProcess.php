<?php

if ($_GET['team'] == 4) {
    $team = array($_POST['1char4team'], $_POST['2char4team'], $_POST['3char4team'], $_POST['4char4team']);
}

if ($_GET['team'] == 8) {
    $team = array(
        $_POST['1char8team'], $_POST['2char8team'], $_POST['3char8team'], $_POST['4char8team'],
        $_POST['5char8team'], $_POST['6char8team'], $_POST['7char8team'], $_POST['8char8team']
    );
}
print_r($team);
echo "<br>";
$team = json_encode($team);

print_r($team);

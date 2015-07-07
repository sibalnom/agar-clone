<?php
$postdata = file_get_contents("php://input");

switch($postdata) {
case "KR-Korea":
    switch(mt_rand(1, 2)) {
        case 1:
            echo '1.247.12.132:443';
            break;
        case 2:
            echo '162.243.157.40:443';
            break;
case "KR-Korea:teams":
    echo 'jp-teams-1.koagario.tk:443';
    break;
case "KR-Korea:experimental":
    echo 'jp-experimental-1.koagario.tk:443';
    break;
}
?>

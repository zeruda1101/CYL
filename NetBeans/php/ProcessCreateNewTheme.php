<?php
include_once "Theme.php";
include "theme_database.php";
$theme = new Theme();
$theme-> theme = $_POST["theme"];
if($theme->validate()){
    echo "is valid";
    echo $theme->toString();
}else{
    echo "Try Again";
}

getConnection();
#insertTheme($theme-> theme = $_POST["theme"]);
#retrieveThemeById($id = 7);
#updateTheme($id = 7,$theme->theme = $_POST["theme"]);
deleteThemeById($id = 8);
?>
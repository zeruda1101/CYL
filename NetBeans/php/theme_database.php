<?php
include "DatabaseConnect.php";

function insertTheme($theme) {
    try {
        $connection = getConnection();
        $sql = "INSERT INTO theme (themename) VALUES ('$theme')";
        $connection->exec($sql);
        $theme->id = $connection->lastInsertId();
        $connection = null;
    } catch (Exception $e) {
        echo "EXCEPTION: Insert failed: ".$e->getMessage();
    }
}

function retrieveThemeById($id) {
    try {
        $connection = getConnection();
        $sql = "SELECT * FROM theme WHERE id = $id";
        $result = $connection->query($sql);
        $theme = new Theme();
        foreach ($result as $row) {
            $theme->id = $row['id'];
            $theme->theme = $row['themename'];
            break;
        }
        $connection = null;
    } catch (Exception $e) {
        echo "EXCEPTION : SELECT failed : ".$e->getMessage();
    }
    return $theme;
}

function updateTheme($id, $themename) {
    try {
        $connection = getConnection();
        $sql = "UPDATE theme SET themename = '$themename' WHERE id = $id";
        $result = $connection->exec($sql);
        $connection = null;
    } catch (Exception $e) {
        echo "EXCEPTION : Update failed : ".$e->getMessage();
    }
    $theme = new Theme();
    $theme->id = $id;
    $theme->themename = $themename;
    return $theme;
}

function deleteThemeById($id) {
    try {
        $connection = getConnection();
        $sql = "DELETE FROM theme WHERE id = $id";
        $result = $connection->exec($sql);
        $connection = null;
    } catch (Exception $e) {
        echo "EXCEPTION : Delete failed : ".$e->getMessage();
    }
}
?>
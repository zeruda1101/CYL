<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link href = "../css/amorettestyles.css" rel = "stylesheet">
        <script src ="../js/amorettescripts.js"></script>
        <meta charset="UTF-8">
        <title> CYL Home </title>
    </head>
    <body>
        <?php
        include "../header.html";
        ?>
        <main>
            <head>
                <title>Create New Theme</title>
            </head>
            <body>
                <table width = 110%>
                    <tr>
                        <th align = "left">New Theme Name</th>
                        <th align = "left">Curriculum</th>
                        <th align = "left">Change Data</th>
                    </tr>
                    <td valign = "top">
                        <form action = "ProcessCreateNewTheme.php" method = "post">
                            <input type = "text" name = "theme" autofocus>
                            <input type ="submit" value ="Submit">
                        </form>
                    </td>
                    <td><table>
                            <tr><td>Pre-Assessment</td></tr>
                            <tr><td>Student Online Training</td></tr>
                            <tr><td>Games</td></tr>
                            <tr><td>Presentation</td></tr>
                            <tr><td>Video</td></tr>
                            <tr><td>Faculty Training Online</td></tr>
                            <tr><td>Post-Assessment</td></tr>
                        </table></td>
                    <td><table>
                            <tr><td>(Upload)</td></tr>
                            <tr><td>(Upload)</td></tr>
                            <tr><td>(Upload)</td></tr>
                            <tr><td>(Upload)</td></tr>
                            <tr><td>(Upload)</td></tr>
                            <tr><td>(Upload)</td></tr>
                            <tr><td>(Upload)</td></tr>
                            <tr><td>(Upload)</td></tr>
                        </table></td>
                </table>
        </main>
        
        <?php

        ?>
        
    </body>
</html>
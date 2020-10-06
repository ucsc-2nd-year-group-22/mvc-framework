<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL ?>public/css/default.css"/>
    

    <?php
        if(isset($this->js)) {
            foreach ($this->js as $js)
                echo '<script src="'.URL.'views/'.$js.'"></script>';
        }
    ?>
    <title>Document</title>

</head>
<body>

<?php Session::init();?>
<div id="header">
    <a href="<?= URL?>">Home</a> | 
    <a href="<?= URL?>help">Help</a> |
    <?php if(Session::get('loggedIn') == true): ?>
    <a href="<?= URL?>dashboard/logout">Logout</a> | 
    <?php else: ?>
    <a href="<?= URL?>login">Login</a>
    <?php endif?>
</div>
<div id="content">
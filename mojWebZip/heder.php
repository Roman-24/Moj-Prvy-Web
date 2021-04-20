<?php
include "jazyk.php";

$nazov_stranky = basename($_SERVER['SCRIPT_NAME'], '.php');
//if ( $nazov_stranky == 'index' ) $nazov_stranky = 'Úvod';
?>

<!DOCTYPE html>
<html lang="sk">

    <head>
        <title> <?php echo ucfirst($nazov_stranky); ?> / iP X</title>
        <meta charset="utf-8">  
        <link rel="stylesheet" href="style/basic.css">

            <?php 
                if($nazov_stranky == 'mojeprislusenstvo') echo '<link rel="stylesheet" href="style/prislusenstvo.css">';
                    else if($nazov_stranky == 'porovnanie') echo '<link rel="stylesheet" href="style/porovnanie.css">';
                    else if($nazov_stranky == 'ios') echo '<link rel="stylesheet" href="style/foto.css">';
                    else if($nazov_stranky == 'foto') echo '<link rel="stylesheet" href="style/foto.css">';
                    else if($nazov_stranky == 'foto1') echo '<link rel="stylesheet" href="style/foto.css">';
                    else if($nazov_stranky == 'foto2') echo '<link rel="stylesheet" href="style/foto.css">';
                    else if($nazov_stranky == 'kontakt') echo '<link rel="stylesheet" href="style/kontakt.css">';
            ?>

    </head>

<body>
    <header>
        <nav>
            <ul class="navigace">

                <li <?php if($nazov_stranky == 'index') echo 'class="aktp"';
                else{echo 'class="neaktp"';} ?> ><a href="index.php"><?php echo $lang['Úvod'] ?></a></li>

                <li <?php if($nazov_stranky == 'iphonex') echo 'class="aktp"';
                else{echo 'class="neaktp"';} ?> ><a href="iphonex.php"><?php echo $lang['iPHONE X'] ?></a></li>

                <li <?php if($nazov_stranky == 'mojeprislusenstvo') echo 'class="aktp"';
                else{echo 'class="neaktp"';} ?> ><a href="mojeprislusenstvo.php"><?php echo $lang['Moje príslušenstvo'] ?></a></li>

                <li <?php if($nazov_stranky == 'porovnanie') echo 'class="aktp"';
                else{echo 'class="neaktp"';} ?> ><a href="porovnanie.php"><?php echo $lang['Porovnanie'] ?></a></li>

                <li <?php if($nazov_stranky == 'ios') echo 'class="aktp"';
                else{echo 'class="neaktp"';} ?> ><a href="ios.php"><?php echo $lang['Operačný systém'] ?></a></li>

                <li <?php if($nazov_stranky == 'foto') echo 'class="aktp"';
                else{echo 'class="neaktp"';} ?> ><a href="foto.php"><?php echo $lang['Fotogaléria'] ?></a></li>

                <li <?php if($nazov_stranky == 'kontakt') echo 'class="aktp"';
                else{echo 'class="neaktp"';} ?> ><a href="kontakt.php"><?php echo $lang['Kontakt'] ?></a></li>
                
            </ul>
        </nav>     
    </header>

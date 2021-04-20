<?php include "heder.php"; ?>
       
        <main class="main1">
                
        <?php
        //pre obrázky zhotovené telefónom
        $pripona = '.jpg' or '.gif' or '.png' or '.jpeg';
            $obrazky = glob('fotos/foto2/*' . $pripona);
            foreach ($obrazky as $subor) {
                    echo '<a href=" '.$subor.' "> <img src=" '.$subor.'" alt="obrazok"></a>';
            }
        ?>

<?php include "futer.php" ?>
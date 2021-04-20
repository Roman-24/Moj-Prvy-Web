<?php include "heder.php"; ?>
   
    <main class="main1">

        <?php
        //pre obrázky náškho telefónu
        $pripona = '.jpg' or '.gif' or '.png' or '.jpeg';
            $obrazky = glob('fotos/foto1/*' . $pripona);
            foreach ($obrazky as $subor) {
                    echo '<a href=" '.$subor.' "> <img src=" '.$subor.'" alt="obrazok"></a>';
            }
        
            echo '<h1 class="nadpis10">Fotografie porovnávaného telefónu iPHONE 11</h1>';
        
        //pre obrázky potovnávaného telefónu
        $pripona = '.jpg' or '.gif' or '.png' or '.jpeg';
            $obrazky = glob('fotos/foto1/porovnavany/*' . $pripona);
            foreach ($obrazky as $subor) {
                    echo '<a href=" '.$subor.' "> <img src=" '.$subor.'" alt="obrazok"></a>';
            }
        ?>

<?php include "futer.php" ?>
<?php include "heder.php"; ?>

    <main> 
        <section class="paragraf">

            <article>
                <h1 class="nadpis1"><?php echo $lang['Čo je to iOS?'] ?></h1>
                <p>
                <?php echo $lang['ios'] ?>
                </p>
            </article>

        </section>
        
        <section class="elementmid">
            <p>
                <?php
                    //pre obrázky ios
                        $obrazky = glob('fotos/ios/*.png');
                        foreach ($obrazky as $subor) {
                            echo '<img class="iosft" src="'.$subor.'" alt="obrazok iOS">';      
                    }
                ?>
            </p>             
        </section>

            <div class="video">
                    <?php
                            $video = glob('fotos/video/*.mp4');
                            foreach ($video as $video2) {
                                    echo '<video width="320" height="240" controls><source src="'.$video2.'" type="video/mp4"></video>';
                            }
                    ?>
                </div>

<?php include "futer.php" ?>
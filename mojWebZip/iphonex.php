<?php include "heder.php"; ?>

    <main> 
        <section>
            <article>

            <?php echo $lang['iphone'] ?>

            <h1 class="nadpis1">iPHONE X</h1>

            <div class="paragraf">
                
                <h2><?php echo $lang['Najlepšie funkcie'] ?></h2>
                <p>
                <?php echo $lang['ip_01'] ?>                                    
                </p>

                <h2><?php echo $lang['Displej'] ?></h2>
                <p>
                <?php echo $lang['ip_02'] ?>   
                </p> 
                        <ul>
                            <?php echo $lang['ip_03'] ?>
                        </ul>
                                
                <h2><?php echo $lang['Procesor'] ?></h2>
                        <ul>
                            <?php echo $lang['ip_04'] ?>
                        </ul>                           
                
                <h2><?php echo $lang['Pamäť'] ?></h2>
                    <p>
                        <?php echo $lang['ip_05'] ?>     
                    </p>

                <h2><?php echo $lang['Kamera'] ?></h2>
                    <p>  
                        <?php echo $lang['ip_06'] ?>
                    </p>

                        <h4><?php echo $lang['Technické špecifikácie:'] ?></h4>
                            <ul>
                            <?php echo $lang['ip_07'] ?>  
                            </ul>

                        <h2><?php echo $lang['Vonkajšie prevedenie'] ?></h2>
                            <p>
                                <?php echo $lang['ip_08'] ?>           
                            </p>
                                <ul>
                                    <?php echo $lang['ip_09'] ?>
                                </ul>
                        

                        <h2><?php echo $lang['Ukážka zvonení'] ?></h2>
                        <p>
                        <?php
                            $zvuky = glob('zvuky/*.mp3');
                            foreach ($zvuky as $zvuk_0) {
                                    echo '<audio controls><source src="'.$zvuk_0.'"type="audio/mp3"></audio>';
                                    echo '<br>';
                            }
                        ?>
                        </p>   
                </div>   
            </article>
        </section>
 
<?php include "futer.php" ?>
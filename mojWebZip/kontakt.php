<?php include "heder.php"; ?>

    <main >

        <section>
            <article>
                <img class="logo" src="fotos/logo.svg" alt="logo">
                 
              <div class="tabulka">
                    
                         <TABLE class="tabkon">
                         <?php echo $lang['kon_tab'] ?>
                          </TABLE>

                </div>

            </article>
        </section>

        <section class="form">
            <h2><?php echo $lang['Kontaktný formulár'] ?></h2>
            <form action="add-new.php" method="POST">
                
                <input required type="text" name="meno" placeholder="<?php echo $lang['Meno'] ?>"> <br>

                <!--<input required type="email" name="email" placeholder="E-mail" value="@"> <br>-->

                        <?php
                        $month = date('m');
                        $day = date('d');
                        $year = date('Y');
                        $today = $year . '-' . $month . '-' . $day;
                        ?>

                <input required type="hidden" name="datum" value="<?php echo $today?>"> <br>

                <textarea required name="sprava" rows="6" class="form2" placeholder="<?php echo $lang['Sem napíš správu'] ?>"></textarea> <br>

                <input type="submit" value="<?php echo $lang['Odoslať'] ?>"></input>
            </form>
        </section>

        <section class="paragraf"> 
            <article>
                <h2><?php echo $lang['O nás'] ?></h2>
                        <p>
                            <?php echo $lang['text_onas'] ?> 
                        </p> 
            </article>
        </section>

        <section class="paragraf">
            <h2><?php echo $lang['Komentáre'] ?></h2>
                <?php
                $myfile = fopen("komenty.txt", "r") or die("Unable to open file!");

                while( !feof($myfile) ){
                    echo fgets($myfile);
                    echo "<br>";
                }

                fclose($myfile);
                ?>
        </section>

<?php include "futer.php" ?>
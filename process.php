<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Ordini</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/default.css"/>
    </head>
    <body>    
        <form action="" class="register">
            <h1>Hai caricato il seguente ordine</h1>
            <?php
            if (isset($_POST['save'])):
                $chkbox = $_POST['chk'];
                $azienda = $_POST['azienda'];
                $day = $_POST['day'];
                $month = $_POST['month'];
                $offnum = $_POST['offnum'];
                $fondi = $_POST['fondi'];
                $ordnum = $_POST['ordnum'];
                $consegna = $_POST['consegna'];
                $from = $_POST['from'];
                $to = $_POST['to'];
//				$root=$_POST['root'];
                $quantita = $_POST['quantita'];
                $descrizione = $_POST['descrizione'];
                $P1 = $_POST['P1'];
                $P2 = $_POST['P2'];
                $IVA = $_POST['IVA'];
                $tot = $_POST['tot'];
                ?>
                <fieldset class="row1">
                    <legend>Azienda</legend>
                    <p>
                        <label>Nome azienda 
                        </label>
                        <input name="azienda" type="text" readonly="readonly" value="<?php echo $azienda ?>"/>
                        <label>Data
                        </label>
                        <input type="text" readonly="readonly" class="small" value="<?php echo $day ?>"/>
                        <input type="text" readonly="readonly" class="small" value="<?php echo $month ?>"/>
                        <input type="text" readonly="readonly" class="small" value="2013"/>
                        <label>Consegna  
                        </label>
                        <input  type="text" readonly="readonly" value="<?php echo $consegna ?>"/>
                    </p>
                    <p>
                        <label>Motivazione
                        </label>
                        <input name="from" type="text" readonly="readonly" value="<?php echo $from ?>"/>
                        <label>Richiedente
                        </label>
                        <input name="to" type="text" readonly="readonly" value="<?php echo $to ?>"/>
                        <!--					<label>Via (Root)
                                            </label>
                                                                <input  type="text" readonly="readonly" value="<?php //echo $root ?>"/>-->
                    </p>
                    <p>
                        <label>Offerta n.
                        </label>
                        <input name="offnum" type="text" readonly="readonly" value="<?php echo $offnum ?>"/>
                        <!--                    <label >(You will receive 
                                            </label><label >the ticket in this )
                                            </label>-->			
                    </p>
                    <p>
                        <label>Fondi
                        </label>
                        <input name="fondi" type="text" readonly="readonly" value="<?php echo $fondi ?>"/>                        		
                    </p>
                    <p>
                        <label>Ordine n.
                        </label>
                        <input name="ordnum" type="text" readonly="readonly" value="<?php echo $ordnum ?>"/>                        		
                    </p>
                    <div class="clear"></div>
                </fieldset>
                <fieldset class="row2">
                    <legend>Articoli
                    </legend>				
                    <table id="dataTable" class="form" border="1">
                        <tbody>
    <?php foreach ($quantita as $a => $b) { ?>
                                <tr>
                                    <p>
                                        <td >
        <?php echo $a + 1; ?>
                                        </td>
                                        <td>
                                            <label>Quantità</label>
                                            <input type="text" readonly="readonly" name="quantita[$a]" value="<?php echo $quantita[$a]; ?>">
                                        </td>
                                        <td>
                                            <label for="descrizione">Descrizione</label>
                                            <input type="text" readonly="readonly" class="small"  name="descrizione[]" value="<?php echo $descrizione[$a]; ?>">
                                        </td>
                                        <td>
                                            <label for="P1">Prezzo unitario</label>
                                            <input type="text" readonly="readonly" name="P1[]" value="<?php echo $P1[$a]; ?>">
                                        </td>
                                        <td>
                                            <label for="P2">Prezzo tot senza IVA</label>
                                            <input type="text" readonly="readonly" name="P2[]" value="<?php echo $P2[$a]; ?>">
                                                <label for="IVA">IVA</label>
                                                <input type="text" readonly="readonly" name="IVA[]" value="<?php echo $IVA[$a]; ?>">
                                                    <label for="tot">Prezzo tot con IVA</label>
                                                    <input type="text" readonly="readonly" name="tot[]" value="<?php echo $tot[$a]; ?>">
                                                        </td>
                                                        </p>
                                                        </tr>
    <?php } ?>
                                                    </tbody>
                                                    </table>
                                                    <div class="clear"></div>
                                                    </fieldset>
                                                    <?php
                                                    $pdo = new PDO('mysql:host=localhost; dbname=ordiniDETO', 'Matteo', 'matteopwd');
                                                    $sql = "INSERT INTO `patients` (`Sample`, `Name`, `Email`, `Phone`,"
                                                            . "`Phenotype`, `Triggers`, `Early onset`, `Recurrence`,"
                                                            . "`Response to therapy`, `Cardiological involvement`,"
                                                            . "`Gastrointestinal involvement`, `Neurological involvement`,"
                                                            . "`Overlapping w complement-related path`, `Renal outcome`,"
                                                            . "`Aggressive phenotype`, `aHUS suspect confirmation`, `Urinary anomalies`, `Biopsy pattern`, `Attachment`) "
                                                            . " VALUES ('$sample', '$name', '$email', '$phone', '$phenotype',"
                                                            . "'$triggers', '$early_onset', '$recurrence', '$response_to_therapy',"
                                                            . "'$cardiological_involvement', '$gastrointestinal_involvement',"
                                                            . "'$neurological_involvement', '$overlapping_w_complement_related_path',"
                                                            . "'$renal_outcome', '$aggressive_phenotype', '$aHUS_suspect_confirmation', '$urinary_anomalies', '$biopsy_pattern',"
                                                            . "'$pic')";

                                                    $result = $pdo->query($sql);
                                                    ?>
                                                    <fieldset class="row3">
                                                        <!--                <legend>Further Information</legend>                  
                                                                            <p>The identification details are required during journey. One of the passenger booked on the ticket should have any of the identity cards ( Passport / PAN Card / Driving License / Photo ID card issued by Central / State Govt / Student Identity Card with photograph) during the journey in original. </p>-->
                                                        <div class="clear"></div>
                                                    </fieldset>
                                                    <fieldset class="row5">
                                                        <legend>Fine ordine</legend>
                                                        <p>
                                                                                <!--<input class="submit" type="button" value="Make Payment &raquo;" />-->
                                                            <a class="submit" href="index.html" type="button"> Nuovo ordine <a/>
                                                                <!--<a class="submit" href="http://techstream.org/Web-Development/PHP/Dynamic-Form-Processing-with-PHP"/>Back to Tech Stream Article</a>-->
                                                        </p>
                                                        <div class="clear"></div>
                                                    </fieldset>
                                                <?php else: ?>
                                                    <fieldset class="row1">
                                                        <legend>Sorry</legend>
                                                        <p>Some things went wrong please try again.</p>
                                                    </fieldset>
                                                <?php endif; ?>
                                                <div class="clear"></div>
                                                </form>
                                                </body>
                                                <!-- Start of StatCounter Code for Default Guide -->
                                                <script type="text/javascript">
                                                    var sc_project = 9046834;
                                                    var sc_invisible = 1;
                                                    var sc_security = "ec55ba17";
                                                    var scJsHost = (("https:" == document.location.protocol) ?
                                                            "https://secure." : "http://www.");
                                                    document.write("<sc" + "ript type='text/javascript' src='" +
                                                            scJsHost +
                                                            "statcounter.com/counter/counter.js'></" + "script>");
                                                </script>
                                                <noscript><div class="statcounter"><a title="free hit
                                                                                      counter" href="http://statcounter.com/" target="_blank"><img
                                                                class="statcounter"
                                                                src="http://c.statcounter.com/9046834/0/ec55ba17/1/"
                                                                alt="free hit counter"></a></div></noscript>
                                                <!-- End of StatCounter Code for Default Guide -->
                                                </html>






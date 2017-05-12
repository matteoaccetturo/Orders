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
			<?php if(isset($_POST['save'])): 
				$chkbox = $_POST['chk'];
				$bus = $_POST['bus'];
				$day = $_POST['day'];
				$month = $_POST['month'];
				$mob = $_POST['mob'];
				$type = $_POST['type'];
				$from = $_POST['from'];
				$to=$_POST['to'];
//				$root=$_POST['root'];
				$BX_NAME=$_POST['BX_NAME'];
				$BX_age=$_POST['BX_age'];			
				$P1=$_POST['P1'];
				$P2=$_POST['P2'];
                                $IVA=$_POST['IVA'];
                                $tot=$_POST['tot'];
			?>
			<fieldset class="row1">
                <legend>Azienda</legend>
				<p>
                    <label>Nome azienda 
                    </label>
                    <input name="bus" type="text" readonly="readonly" value="<?php echo $bus ?>"/>
                    <label>Data
                    </label>
					<input type="text" readonly="readonly" class="small" value="<?php echo $day ?>"/>
					<input type="text" readonly="readonly" class="small" value="<?php echo $month ?>"/>
					<input type="text" readonly="readonly" class="small" value="2013"/>
					<label>Consegna  
                    </label>
                    <input  type="text" readonly="readonly" value="<?php echo $type ?>"/>
					
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
					<input  type="text" readonly="readonly" value="<?php echo $root ?>"/>-->
					 
                </p>
                <p>
                    <label>Offerta n.
                    </label>
                    <input name="mob" type="text" readonly="readonly" value="<?php echo $mob ?>"/>
<!--                    <label >(You will receive 
                    </label><label >the ticket in this )
                    </label>-->
					
					
                </p>
				
				<div class="clear"></div>
            </fieldset>
            <fieldset class="row2">
                <legend>Articoli
                </legend>				
                <table id="dataTable" class="form" border="1">
					<tbody>
					<?php foreach($BX_NAME as $a => $b){ ?>
						<tr>
							<p>
								<td >
									<?php echo $a+1; ?>
								</td>
								<td>
									<label>Quantità</label>
									<input type="text" readonly="readonly" name="BX_NAME[$a]" value="<?php echo $BX_NAME[$a]; ?>">
								</td>
								<td>
									<label for="BX_age">Descrizione</label>
									<input type="text" readonly="readonly" class="small"  name="BX_age[]" value="<?php echo $BX_age[$a]; ?>">
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
var sc_project=9046834; 
var sc_invisible=1; 
var sc_security="ec55ba17"; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="free hit
counter" href="http://statcounter.com/" target="_blank"><img
class="statcounter"
src="http://c.statcounter.com/9046834/0/ec55ba17/1/"
alt="free hit counter"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->
</html>






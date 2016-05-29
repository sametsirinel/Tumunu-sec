<?php
	
	$secili = $_POST['secili'];
	
	for($x=0 ; $x<count($secili);$x++){
	
		mysql_query("delete from veritabani_adi where id='".$secili[$x]."'");	// Hepsini Sil
		mysql_query("update veritabani_adi set okundu='1' where id='".$secili[$x]."'"); // Okundu
		
	}

?>
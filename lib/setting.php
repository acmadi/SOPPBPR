<?
	$applVersi		= "0.1";
	$applName 		= "TiraOS";
	$applTitle		= $applName."-v".$applVersi;
	$dbHost			= "localhost";
	$dbUser			= "root";
	$dbPass			= "rutan";
	$dbName			= "alir_info";
	$phpSelf		= $_SERVER["PHP_SELF"];
	$bulan			= array("1"=>"Januari","Februari","Maret","April","Mei","Juni",
						"Juli","Agustus","September","Oktober","November","Desember");
	$tanggal		= date("d")." ".$bulan[date("n")]." ".date("Y");
	/* client */
	$ipClient		= $_SERVER["REMOTE_ADDR"];
?>
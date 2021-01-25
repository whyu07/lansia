<?
	//cek load
	if(ereg("tanya.php", $_SERVER['PHP_SELF']))
	{
		header('Location: index.php');
		exit;
	}
		echo("<br/>");
			echo("<br/>");
				echo("<br/>");
	$answer		= $_GET['answer'];
	$tblData	= "data";
	
	if(!$answer) $answer = 1;
	
	$result 	= mysql_query("select * from {$tblData} where id='{$answer}'");
	if(mysql_num_rows($result)){
		$row 		= mysql_fetch_array($result);
		$pertanyaan = nl2br($row['pertanyaan']);
			
		echo($pertanyaan);
		echo("<br/>");
		echo("<br/>");
		if($row['ifyes'] != "0" && $row['ifno'] != "0"){
		
echo ("<font color='#d1ad2e'><b>JAWABLAH PERTANYAAN BERIKUT</b><hr color='#d1ad2e' ></font>");
			echo("<a href=\"?page=konsultasiFm&answer={$row['ifyes']}\">&nbsp;&nbsp;&nbsp;&nbsp;Ya</a>&nbsp;|<a href=\"?page=konsultasiFm&answer={$row['ifno']}\">&nbsp;Tidak</a>");
					}else{
			
			echo("<a href=\"". dirname($_SERVER['PHP_SELF']) ."\">Back To Home</a>");
			
		}
	}
?>
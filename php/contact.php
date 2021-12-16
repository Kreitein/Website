<?php
	
	if(isset($_POST["B1"]) || isset($_POST["B2"])) 

	{
		
	$qu = "REPLACE Connection SET Number_table = '".$_POST['number']."',
	Name = '".$_POST['first-name']."',
	Surname = '".$_POST['last-name']."',
	Phone = '".$_POST['telephone']."',
	Mail = '".$_POST['email']."',
	SMS = '".$_POST['message']."',";

		echo $qu;
                echo "     Запрос выполнен успешно!";

	}

	elseif(isset($_POST["B3"])) 
	{	
	$qu = "DELETE from Connection

	where Tab_stud = '".$_POST['number']."'";
	        echo $qu;
                echo "    Запрос выполнен успешно!";
	}

	$c = mysql_connect('localhost', 'root', '');
	mysql_select_db('Car', $c);
	mysql_query('SET NAMES cp1251');
	mysql_query($qu);

?>
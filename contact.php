<?php
    
    if(isset($_POST["B1"])) 

    {
	
    $qu = "INSERT INTO Car.Connection (`Name`,Surname,Phone,Mail,SMS) VALUES ('".$_POST['first-name']."','".$_POST['last-name']."','".$_POST['telephone']."','".$_POST['email']."','".$_POST['message']."')";

	//echo $qu;
                //echo "     Запрос выполнен успешно!";

    }

    /*elseif(isset($_POST["B3"])) 
    {	
    $qu = "DELETE from Connection

    where Number_table = '".$_POST['number']."'";
            echo $qu;
                echo "    Запрос выполнен успешно!";
    }*/

    $c = mysqli_connect('db', 'root', '123');
    //mysqli_select_db('Car', $c);
    //mysqli_query('SET NAMES cp1251');
    mysqli_query($c, $qu);

?>
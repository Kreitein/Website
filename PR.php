<?php
	
	if(isset($_POST["B1"])) 

	{
		

              //  echo "     Запрос выполнен успешно!";

	$qu = "INSERT INTO Car.Reservation (`Name`,Surname,Phone,Years,Email,adres,city,`zip-code`,`pickup-location`,`selected-car`) VALUES ('".$_POST['first-name']."','".$_POST['last-name']."','".$_POST['phone-number']."','".$_POST['age']."','".$_POST['email-address']."','".$_POST['address']."','".$_POST['city']."','".$_POST['zip-code']."','".$_POST['pickup-location']."','".$_POST['selected-car']."')";
	}

		
	/* elseif(isset($_POST["B3"])) 
	{ 	
	$qu = "DELETE from Reservation

	where Number_table = '".$_POST['number']."'";
	        echo $qu;
                echo "    Запрос выполнен успешно!";
	}
*/
	$c = mysqli_connect('db', 'root', '123');
	//mysql_select_db('Car', $c);
	//mysql_query('SET NAMES cp1251');
	mysqli_query($c, $qu);

?>

<!doctype html>
<html lang="en">
<head>
  <title>Прокат автомобилей</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
  <?php
    $host = 'db:3306';
    $user = 'root';
	$pass = '123';
    $db_name = 'Car';
    $link = mysqli_connect($host, $user, $pass, $db_name);
  ?>

  <?php
  if (isset($_POST["Name"])) {
    $sql = mysqli_query($link, "INSERT INTO Car.Reservation (`Name`,Surname,Phone,Years,Email,adres,city,`zip-code`,`pickup-location`,`selected-car`) VALUES ('".$_POST['first-name']."','".$_POST['last-name']."','".$_POST['phone-number']."','".$_POST['age']."','".$_POST['email-address']."','".$_POST['address']."','".$_POST['city']."','".$_POST['zip-code']."','".$_POST['pickup-location']."','".$_POST['selected-car']."')");
    if ($sql) {
      echo '<p>Данные успешно добавлены в таблицу.</p>';
    } else {
      echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
    }
  }
?>
<div><center>

<h1>Таблица в базе данных</h1>
<table class='tabl'>
        <thead>
            <tr>
                <td>Номер</td>
                <td>Имя</td>
                <td>Фамилия</td>
                <td>Номер телефона</td>
				<td>Лет</td>
                <td>Электронная почта</td>
				<td>Адрес</td>
				<td>Город</td>
				<td>Почтовый индекс</td>
				<td>Cамовывоз</td>
				<td>Выбранный автомобиль</td>
            </tr>
        </thead>
        <tbody>
        <?php
            $result = mysqli_query($link,"SELECT * FROM Reservation");
            while($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $row['Number_table']?></td>
                    <td><?php echo $row['Name']?></td>
                    <td><?php echo $row['Surname']?></td>
                    <td><?php echo $row['Phone']?></td>
                    <td><?php echo $row['Years']?></td>
					<td><?php echo $row['Email']?></td>
					<td><?php echo $row['adres']?></td>
					<td><?php echo $row['city']?></td>
					<td><?php echo $row['zip-code']?></td>
					<td><?php echo $row['pickup-location']?></td>
					<td><?php echo $row['selected-car']?></td>
                </tr>

            <?php
            }
            ?>
            </tbody>
            </table>
</div>

</body>
</html>

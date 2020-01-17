<?php
include("connect.php");
include("header.php");
include("footer.php");
?>
<!doctype html>
<html lang="nl">

<head>
    <style>
        body {

        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>beheerformulier</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div id="Content" style="Height: 60%;">
<?php

    echo '<table border="1" width="700" height="200">
    <tr>
        <th>Artikel</th>
        <th>aantal</th>
        <th>Verwijderen</th>
    </tr>
        ';
	$sql ="SELECT * FROM artikel";
	$result = $connection->query($sql);

	if ($result->num_rows>0){

		while ($row = $result->fetch_assoc()) {
			echo "
        	 <tr>
        		<td>".$row['productnaam']. "</td>
                <td>".$row['aantal']."</td>
                <td><a href=\"Verwijderbeheer.php?artikelnummer=" . $row['Artikelnummer'] . "\">verwijderen</a></td>
            </tr>

            ";
        }
    }
          echo '</table>';
?>
      <?php

		$sql = 'DELETE FROM Artikel WHERE artikelnummer = "' . $_GET['artikelnummer'] .'"';

	       $result = $connection->query($sql);

        ?>
    </div>
</body>
</html>

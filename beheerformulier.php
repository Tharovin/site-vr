<?php
include("connect.php");
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

<form action="beheerformulier.php" method="post">
<table class="center">
    <tr>
        <div class="container">
    <th>beheer</th>
    <th>invoer</th>    
        </div>
    </tr>
    <tr>
    <td><b>Aantal</b></td>
    <td><input type="number" name="aantal"></td>
    </tr>
    <tr>
    <td>productnaam</td>
    <td><input type="text" name="productnaam"></td>
    </tr>
    <tr>
    <td><input type="submit" name="submit" value="Klik om toe te voegen"></td>
    <td> </td>
    </tr>
</table>   
</form>
<?php
        if(isset($_POST["submit"]))
        {
           $huts = ('gepost');
           echo $huts;
            echo "<br>";
            
          $sql = "INSERT INTO artikel (aantal, productnaam)
                    VALUES ('" . $_POST['aantal'] . "', '" . $_POST['productnaam'] . "')";
            if ($connection->query($sql) === TRUE)
             {
             }
                elseif ($connection->query($sql) === false)
                {
                    $huts = ('nope');
                }
            else
            {
                $huts = ('nope');
            }
        }
?>

</body>
</html>
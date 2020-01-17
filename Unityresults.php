<?php
include("connect.php");
include("header.php");
include("footer.php");
?>
<!doctype html>
<html lang="nl">
     <style>

     </style>
        <head>
             <meta charset="utf-8">
             <meta name="viewport" content="width=device-width, initial-scale=1">
              <title>beheerformulier</title>
              <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     </head>
    <body>
        <div id="Content" style="Height: 60%;">
            <table class=" border border-dark m-auto" style="width:100%" >
                <tr class="border border-dark">
                    <th class="border border-dark">
                     Aantal
                    </th>
                    <th class="border border-dark">
                     Item
                    </th>
                </tr>
                <?php

                $_POSTS[0] = 1;
                $_POSTS[1] = 2;
                $_POSTS[2] = 3;
                $_POSTS[3] = 4;
                $arr = count($_POSTS);
                $i = 0;

                for ($i = 0; $i < $arr; $i++) {
                         echo '</th>';
                         echo '<th class="border border-dark">';
                   print $_POSTS[$i];
                         echo '</th>';
                         echo '<th class="border border-dark">';
                   print $_POSTS[$i];
                         echo '</th class="border border-dark">';
                         echo '</tr>';
                }
                ?>
            </table>
        </div>
    </body>
    </body>
</html>

<?php

declare(strict_types=1); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sprint</title>
</head>

<body>
    <?php
    echo $_SERVER['REQUEST_URI'];

    print("<table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>");


    $path = isset($_GET['path']) ? $_GET['path'] : './';
    $files = scandir($path);
    // echo '<br>';
    // print_r(scandir('./'));
    // echo '<br>';
    // print_r(scandir('./bandymas'));
    // echo '<br>';

    foreach ($files as $file) {
        // print("<tr><td>" . is_dir($file) . "</td>");
        print('<tr><td>' . (is_dir($file) == 1 ? "direktorija" : "failas") . '</td>');
        print('<td><a href=$path=' . $path . '/' . $file . '>' . $file .  '</a></td>');
        print("<td>" . (is_file($file) == 1 ? "<button>Trinti</button>" .
            " " . "<button>Parsiuntimas</button>" : null) . "</td></tr>");
    }
    print ('</tbody></table>');
    echo '<br>';
    // print('<button id="atgal">Atgal</button><br><br>
    //         <form action="" method="GET">
    //             <input type="text" placeholder="Sukurti naują direktoriją">
    //             <button>pateikti</button>
    //         </form>');

  
?> 

</body>

</html>

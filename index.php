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
    ?>
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>

    <?php

    $files = scandir("../sprint1");
    foreach ($files as $file) {
        echo $file . "<br />";
        
        if(is_dir($file)) {
            echo ("File  ");
          } else {
            echo ("Directory  ");
          }
    }
  






    ?>

</body>

</html>
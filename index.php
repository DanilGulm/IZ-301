<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список студентов</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1> Список студентов </h1>
    <?php
    define("HOST","localhost");
    define("USER","root");
    define("PASS","root");
    define("DB","students");

    $connect = new mysqli(HOST,USER, PASS, DB);

    $sql = "SELECT * FROM students;";
    $result = $connect->query($sql);
    while ($row = $result->fetch_array
    (MYSQLI_ASSOC)) {
        echo "<p>
                  $row[lname] $row[fname] $row[age]        
                 </p>";
    }
    
    ?>
</body>
</html>
<?php
require_once 'dbh.inc.php';

if($_POST) {

    $reports_date =$_POST['reports_date'];
    $reports_descriptions =$_POST['reports_descriptions'];
    $reports_image =$_POST['reports_image'];
    $name =$_POST['name'];
    


    $sql = "INSERT INTO reports (
            reports_date,
            reports_descriptions,
            reports_image,
            name


            ) VALUES (
            $reports_date,
            '$reports_descriptions',
            '$reports_image',
            '$name'
           
            )";

    if($conn->query($sql) === TRUE) {
    echo'<html>

    <head>

    <title>Add reports</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script><body>'
        ;
        echo "<div class=' text-center container'>";
        echo "<h1 class='text-center text-danger'>New Record Successfully Created</h1>";
        echo "<a href='../upload_report.php' style='text-decoration:none'>
                <button type='button' class='btn btn-warning m-1'>
                    Back
                </button>
                </a>";

        echo "<a href='../admin_landing_page.php'><button type='button' class='btn btn-warning m-1'>Home</button></a>";
        echo'</div></body>

            </html>';
    } else {

        echo "Error " . $sql . ' ' . $conn->connect_error;

    }

    $conn->close();

}

?>


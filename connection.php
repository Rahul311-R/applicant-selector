<head>
    <link rel="stylesheet" href="registration-success.css">
</head>
<?php
    $exmne_fullname = $_POST['fullname'];
    $exmne_birthdate = $_POST['birthdate'];
    $exmne_gender = $_POST['gender'];
    $exmne_course = $_POST['role'];
    $exmne_email = $_POST['email'];
    $exmne_password = $_POST['password'];

    //database connection
    $conn = new mysqli('localhost', 'root', '', 'cee_db');
    if(($conn->connect_error)){
        die('connection Failed : '.$conn->connect_error);
    }else{
        $stmt =$conn->prepare("insert into examinee_tbl(exmne_fullname, exmne_birthdate, exmne_gender, exmne_course, exmne_email, exmne_password)
        values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $exmne_fullname,  $exmne_birthdate , $exmne_gender, $exmne_course, $exmne_email, $exmne_password );
        $stmt->execute();
        echo  "<div class='registration-success'>Account Registration successfully</div>";
        $stmt->close();
        $conn->close();
    }
?>

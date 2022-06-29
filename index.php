<?php
if(isset($_POST['SubmitButton'])){ 
$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$address = $_POST['address'];

include 'db.php';

$sql = "INSERT INTO mydata(name, number, email, address)VALUES('$name','$number','$email','$address')";

$result = mysqli_query($conn, $sql);

if($result){
    echo '<script>alert("Success")</script>';
}
else{
    echo '<script>alert("Failled")</script>';
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    * {
        margin: 0px;
        padding: 0px;
    }

    h1 {
        background-color: green;
        color: #fff;
        font-family: arial;
        padding: 10px;
    }
    </style>
</head>

<body>
    <h1>Welcome in Arjun Application</h1><br>
    <form action="" method="post">
        Name: <input type="text" name="name" required><br><br>
        Phone: <input type="text" name="number" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        address: <input type="text" name="address" required><br><br>
        <input type="submit" value="Submit" name="SubmitButton">
    </form>
    <hr>
    <br><br>
</body>

</html>
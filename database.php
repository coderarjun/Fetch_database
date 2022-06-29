<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Data from Database</h1>

    <table border="2">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Number</th>
            <th>Email</th>
            <th>Address</th>
        </tr>

        <?php 
include 'db.php';
$sql = "SELECT * FROM mydata";

$result = mysqli_query($conn, $sql);

if ($result) {
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $name = $row['name'];
        $number = $row['number'];
        $email = $row['email'];
        $address = $row['address'];

?>
        <tr>
            <td><?php echo $id  ?></td>
            <td><?php echo $name  ?></td>
            <td><?php echo $number  ?></td>
            <td><?php echo $email ?></td>
            <td><?php echo $address ?></td>
        </tr>

        <?php 

    }
}

?>
    </table>
</body>

</html>
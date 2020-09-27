<?php
$host="localhost";
$username="root";
$password="";

$dbname="crud";

$con=mysqli_connect($host,$username,$password,$dbname);

if ($con){
    echo "connected";

}
else{
    echo "error";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        username <input type="text" name="name">
        age <input type="text" name="age">
        <button type="submit" name="submit">submit</button>
    </form>


<?php
if(isset($_POST["submit"])){
$name=$_POST["name"];
$age=$_POST["age"];
$sql="INSERT INTO add_table (name,age) VALUES ('$name',$age)";
    if($con->query($sql)){
        echo "saved";
    }
    else{
        echo "not saved".mysqli_error($sql);
    }
}
?>

</body>

</html>
"# php_crud" 
here you can connect php to sql database and create datas in mysql...

#the below cod eis used to connect mySQl database...
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

#the below code is used to add datas in the sql table
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

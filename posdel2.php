<?php
if(isset($_GET["id"])){
    $id=$_GET["id"];

    $servername="localhost";
    $username="root";
    $password="KARTHIK@2004";
    $database="om";
    $conn=mysqli_connect($servername,$username,$password,$database);

    $sql="DELETE FROM pos2 WHERE id=$id";
    $conn->query($sql);
}
header("location:/eventimg2.php");
exit;

?>
<?php
$con=mysqli_connect("localhost","root","","products");

$id="";
if(isset($_POST['product_id']))
{
$id=$_POST['product_id'];
}

$query="delete from products  where id='$id'";
$ex=mysqli_query($con,$query);
if($ex)
{
    echo "Item has been deleted successfully";
}




?>
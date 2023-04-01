<?php
$con=mysqli_connect("localhost","root","","products");

$id="";
$quantity="";

if(isset($_POST['product_id']))
{
$id=$_POST['product_id'];
}
if(isset($_POST['product_qty']))
{
$quantity=$_POST['product_qty'];
}
$query="update products set quantity='$quantity' where id='$id'";
$ex=mysqli_query($con,$query);
if($ex)
{
    echo "Item has been updated";
}




?>
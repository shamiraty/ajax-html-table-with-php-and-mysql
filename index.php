<html>
<link rel="stylesheet" a href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" a href="alert/css/alertify.min.css">
<link rel="stylesheet" a href="alert/css/themes/bootstrap.min.css">
<link rel="stylesheet" a href="alert/css/themes/default.min.css">
<link rel="stylesheet" a href="custom/custom.css">
<link rel="stylesheet" a href="google/font.css">

<link rel="stylesheet" a href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css
">

<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="jquery/jquery.js"></script>
<script src="sweetalert/sweetalert.min.js"></script>
<script src="alert/alertify.min.js"></script>
<script src="alert/alertify.js"></script>
<script src="custom/custom.js"></script>

<link rel="stylesheet" a href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>
<div class="py-5"> 
<div class="container refresh">   
    <div class="row justify-content-center"">
        <div class="col-md-12">
            <div class="card shadow mt-3 py-3">
                <div class="card-body">
                    <p>List of Products:</p><hr>
<table class="table table-striped table-bordered"id="example">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Profit</th>
            <th>Status</th>
            <th>Tax</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>


<?php
$con=mysqli_connect("localhost","root","","sample_db");
$query="select id,name,format(price,2)as price,format(profit,2)as profit,status,quantity,CONCAT(FORMAT(tax, 1), '%')as tax from products order by id asc";
$execute=mysqli_query($con,$query);
if(mysqli_num_rows($execute)>0)
{
while($row=mysqli_fetch_array($execute))
{
    echo "<tr class='product_data'><td>".$row['id']."
    
    <input type='hidden'class='form-control prod_id'value='".$row['id']."'disabled>
    
    "
    ;


    echo "<td>".$row['name']."</td>";
    echo "<td>"."
    <div class='input-group text-center 'style='width:130px'>
    <button class='input-group-text bg-warning  changeQuantity decrement-btn'>-</button>
    <input type='text'name='quantity'class='form-control p_quantity text-center'value='1'>
    <button class='input-group-text bg-success changeQuantity increment-btn'>+</button>                     
    </div>"."</td>";

    echo "<td>".$row['price']."</td>";
    echo "<td>".$row['profit']."</td>";
    echo "<td>".$row['profit']."</td>";
    echo "<td>".$row['tax']."</td>";
    echo "<td>  <i class='fa fa-trash text-danger prod_click'>
    
    <input type='hidden'class='form-control prod_delete'value='".$row['id']."'disabled></i
    
    </td></tr>

    ";

    
     
}
mysqli_free_result($execute);
}
else
{

}
mysqli_close($con)
?>
    
    </tbody>
</table>

                </div>
            </div>
        </div>
    </div>
</div>
</html>
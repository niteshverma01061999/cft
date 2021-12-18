<?php
include('registration.php');
$con = mysqli_connect("localhost","root","","order");
if (!$con)
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{
echo "Successfully connected";
}
if(isset($_POST['submit']))
{
    $oid=$_POST['oid'];
    $oname=$_POST['oname'];
    $price=$_POST['price'];
    $qty=$_POST['qty'];
    
    $query=mysqli_query($con,"insert into order_item (order_id,item_name,price,quantity)
    values ('$oid','$oname',' $price','$qty') ");
    if($query)
    {
        echo "<script>alert('Item added successfully');</script>";;
    }
    else
    {
    echo "<script>alert('Something went wrong... Please try again...');</script>";;
    }
}
?>

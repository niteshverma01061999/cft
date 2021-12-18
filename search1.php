<?php
$con = mysqli_connect("localhost","root","","order");
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$order_id=$_POST['order_id'];
$sql="select * from order_item where order_id='$order_id'";
if($result=mysqli_query($con,$sql))
{
if(mysqli_num_rows($result)>0)
{
echo "<br>";
echo "<br>";
echo "<center>";
echo "<table>";
echo "<tr>";
echo "<th>Order ID</th>";
echo "<th>Item Name</th>";
echo "<th>Price</th>";
echo "<th>Quantity</th>";
echo "</tr>";
while($row=mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row['order_id']."</td>";
echo "<td>".$row['item_name']."</td>";
echo "<td>".$row['price']."</td>";
echo "<td>".$row['quantity']."</td>";
echo "</tr>";
}
echo "</table>";
mysqli_free_result($result);
}
else
{
echo "<script>alert('No record found');</script>";
}
}
else
{
echo "error $sql.".mysql_error($con);
}
mysqli_close($con);
?>

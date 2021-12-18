<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*{
			margin: 0px; 
		}
                .a1{
			height: 170px;
			width: 1440px;
			background: black;
		}
		.a2{
			padding-left: 20px;
			font-family:cursive;
			padding-top: 10px;
			font-size: 20px;
			color: red;
                    }
                .navbar ul{
			float: right;
			margin-top: -50px;
			margin-right: 100px;
		}
		.navbar ul li{
			display: inline;
			font-family: sans-serif; 
			margin-right: 33px; 
			font-size: 25px;
		}
		.navbar ul li a{
			color: red;
			text-decoration: none;
		}
		.navbar ul li a:hover{
			border-bottom-style: 2px;
			color: white;
			border-bottom: 4px solid yellow;
			padding: 10px;
		} 
		.a10{

          margin-top: 80px;
          font-size: 50px;
          font-family: sans-serif;
		}
		.a20{
			color: red;
		}
                .a30{color:white}
		.b2{
			height: 50px;
		}
		.c2{
			border: 120px;
		}
		.c3{
        padding-right: 400px;
        padding-top: 50px;
		}
		.c5{
			height: 30px;
			width: 460px;
			font-size: 17px;
		}
		.c6{
			height: 30px;
			width: 460px;
			font-size: 17px;
		}
		.c4{
			padding-top: 20px;
		}
		.c7{
			padding-top: 20px;
			float: left;
		}
		.c8{
			padding-top: 20px;
			float: right;
		}
		.c9{
			height: 35px;
			width: 465px;
			font-size: 15px;
			background-color: red;
			color: white;
			border-color: 1px solid red;
			border-radius: 2px;
		}
		.c10{
			padding-top: 10px;
		}
		.c11{
           padding-top: 10px;
		}
		.k{
			width: 67px;

		}
	</style>
</head>
<body>

<div class="a1">
		<div class="a2">
			<h1><a name="home">Order</a></h1>
		</div>
		<div class="navbar">
		<ul>
		<li><a href="search.php">Search</a></li>
	    </ul>
	    </div>
	</div> 
<div class="a10">
	<center><p><span class="a20">A</span>dd
	<span class="a20">a</span>
        <span class="a20">N</span>ew
        <span class="a20">O</span>rder</p></center>  
</div>
<center><div class="k">
	<hr>
</div></center>
<div >
<form method="post" action="registrationphp.php">
<center><table class="c2">

                <tr>
			<td><h2 class="c3">Order Id</h2></td>
		</tr>
		<tr>
		    <td><input type="text" name="oid" placeholder="Enter order id" class="c5"></td>
		 </tr>
		<tr>
			<td><h2 class="c3">Item Name</h2></td>
		</tr>
		<tr>
		    <td><select name="oname" class="c5" >
				<option value=""> select </option>
				<option value="Poha"> Poha </option>
				<option value="Chai"> Chai </option>
				<option value="Jeera"> Jeera </option>
				<option value="Wheats"> Wheats </option>
				<option value="Mustard Oil"> Mustard Oil </option>
				<option value="Sugar"> Sugar </option>
				<option value="Tuar Dal"> Tuar Dal </option>
				<option value="Turmeric Powder"> Turmeric Powder </option>
			</select></td>
		 </tr>
                <tr>
			<td><h2 class="c3">Price</h2></td>
		</tr>
		<tr>
		    <td><input type="number" name="price" placeholder="Enter price" class="c5"></td>
		 </tr>
        <tr>
        	<td><h2 class="c4">Quantity</h2></td>
        </tr>
        <tr>
        <td><input type="number" name="qty" placeholder="Enter quantity" class="c6"></td>
        </tr>
              
 <tr><td><p class="c10"><input type="submit" name="submit" value="Add" class="c9" ></p></td></tr>
  </table></center>
</form>
</div>
<div class="a1">
<div class="a2">
<center>
<a name="contact">
<h4><span class="a30">Contact Us:</span></h4>
                        <table>   
				<tbody>
					<tr><td>Location:New Delhi</td></tr>
					<tr><td>Phone Number:+91 9876543210</td></tr>
                                        <tr><td>Email-id:order@gmail.com</td></tr>
					<tr><td>Website:<a href="#">www.order.com</a></td></tr>
				</tbody>
			</table>
	</center>	
</div>	
</div>
</div>
</body>
</html>


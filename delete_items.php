


<?php
include('session_u.php');

if(!isset($_SESSION['login_user1'])){
header('Location:index.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Delete items | Sude Bakery</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/prettyPhoto.css" rel="stylesheet">
<link href="css/price-range.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>




<header id="header">



<div class="header-middle">
<div class="container">
<div class="row">
<div class="col-md-4 clearfix">
<div class="logo pull-left">
<a href="index.html"><img src="images/home/logo.png" alt="" /></a>
</div>



<div class="btn-group pull-right clearfix">


<h1 style="    color: skyblue;font-weight: 300">Admin Panel</h1>

</div>
</div>
<div class="col-md-8 clearfix">
<div class="shop-menu clearfix pull-right">

<h1 style="    color: #5AFF15;font-weight: 300">Sude Bakery</h1>


</div>
</div>
</div>
</div>
</div>



<div class="header-bottom">
<div class="container">
<div class="row">
<div class="col-sm-12">

<div class="mainmenu pull-left">
<ul class="nav navbar-nav collapse navbar-collapse">

<li><a href="index.php"  style="font-weight: 400;"><i class="fa fa-star"style="color:#dddcda;" ></i> Home</a></li>

<li><a href="view_items.php"  style="font-weight: 400;"><i class="fa fa-star"style="color:#dddcda;" ></i> View Items</a></li>

<li><a href="add_items.php"  style="font-weight: 400;"><i class="fa fa-star"style="color:#dddcda;" ></i> Add Items</a></li>

<li><a href="edit_items.php"  style="font-weight: 400;"><i class="fa fa-star"style="color:#dddcda;" ></i> Edit Items</a></li>

<li><a href="delete_items.php" class="active"  style="font-weight: 400;"><i class="fa fa-star"style="color:#dddcda;" ></i> Delete Items</a></li>

<li><a href="view_order_details.php"  style="font-weight: 400;"><i class="fa fa-star"style="color:#dddcda;" ></i> Order Details</a></li>

<li><a href="logout_u.php" style="color: color:#dddcda;font-weight: 400"><i class="fa fa-lock" style="color:#dddcda;"></i> Logout</a></li>



</ul>
</div>
</div>

</div>
</div>
</div>
</header>










<section>
<div class="container">
<div class="row">


<div class="col-sm-12 padding-right">
<div class="features_items" id="myTable">




<section id="cart_items">
<div class="container">





     


  <form action="delete_items1.php" method="POST">
<div class="table-responsive cart_info">
<table class="table table-condensed">
<thead>
<tr class="cart_menu" style="background-color: #42378f;
background-image: linear-gradient(315deg, #42378f 0%, #f53844 74%);outline: none;border:none;padding:10px;">



<td class="total" style="min-width: 100px;text-align: center;">No.</td>
<td class="image" style="min-width: 280px;text-align: center;">Photo</td>
<td class="description" style="min-width: 250px;text-align: center;">Item Name</td>
<td class="price"style="min-width: 250px;text-align: center;">Price</td>
<td class="quantity"style="min-width: 250px;text-align: center;">Categries</td>



<td></td>
</tr>
</thead>

<tbody>






<?php


$user_check=$_SESSION['login_user1'];
$sql = "SELECT * FROM products f ORDER BY F_ID";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0)
{
$count=1;
  ?>

    <?PHP

      while($row = mysqli_fetch_assoc($result)){
    ?>


    <tr>

      <td class="cart_price"style="min-width: 100px;text-align: center;"><p> <input name="checkbox[]" type="checkbox" value="<?php echo $row['F_ID']; ?>"/></p></td>
       <td class="cart_product"style="min-width:250px;text-align: center;">
      <a href=""> <img src=" <?php echo $row["images_path"]; ?>" style="width: 200px;height: 200px;"></a> 

       </td>
      <td class="cart_description"style="min-width: 250px;text-align: center;"><p><?php echo $row["name"]; ?></p></td>
      <td class="cart_price"style="min-width: 250px;text-align: center;"><p><?php echo $row["price"]; ?></p></td>
      <td class="cart_description"style="min-width: 250px;text-align: center;"><p><?php echo $row["description"]; ?></p></td>
   
    </tr>

  <?php   $count++; 


    } 



  ?>



  <?php } else { ?>

  <h4 style="color: #007bff"><center>0 RESULTS</center> </h4>

  <?php } ?>














</tbody>
</table>

  
<div class="form-group">
          <button type="submit" id="submit" name="delete" value="Delete"style="background-color: #42378f;
background-image: linear-gradient(315deg, #42378f 0%, #f53844 74%);outline: none;border:none;width: 150px;padding:10px;" class="btn btn-danger pull-right"> DELETE</button>    
      </div>


</div>




</form>


</div>
</section>














</div>
</div>
</section>




<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/price-range.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
</body>
</html>



















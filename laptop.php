

<?php
session_start();
require 'connection.php';
$conn = Connect();

?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Laptops | Sude Bakery</title>
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
<div class="col-sm-9">

<div class="mainmenu pull-left">
<ul class="nav navbar-nav collapse navbar-collapse">

<li><a href="index.php" style="font-weight: 400"><i class="fa fa-star"></i> Home</a></li>
<li><a href="mobile.php" style="font-weight: 400"><i class="fa fa-star"></i> Pizza & Burger</a></li>
<li><a href="desktop.php" style="font-weight: 400"><i class="fa fa-star"></i> Cakes & Bread</a></li>
<li><a href="laptop.php" class="active" style="font-weight: 400"><i class="fa fa-star"></i> Breakfast & Snacks</a></li>


<?php  if(isset($_SESSION['login_user2'])) {?>

<li><a href="cart1.php"  style=" color:#dddcda;font-weight: 400"><i class="fa fa-lock" style="color:#dddcda;"></i>Cart (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else{
                echo "0";
              }
              ?>)</a></li>
<li><a href="logout_u.php" style="color: color:#dddcda;font-weight: 400"><i class="fa fa-lock" style="color:#dddcda;"></i> Logout</a></li>


<?php  }else{ ?>

<li><a href="customerlogin.php" style="color: color:#dddcda;font-weight: 400"><i class="fa fa-lock" style="color:#dddcda;"></i> Login</a></li>
<?php

}
?>

</ul>
</div>
</div>
<div class="col-sm-3">
<div class="search_box pull-right">
<input type="text" id="myInput" onkeyup="myFunction()"  placeholder="Search"/>
</div>
</div>
</div>
</div>
</div>
</header>











<section id="slider">
<div class="container">
<div class="row">
<div class="col-sm-12">
<div id="slider-carousel" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
<li data-target="#slider-carousel" data-slide-to="1"></li>
<li data-target="#slider-carousel" data-slide-to="2"></li>
</ol>

<div class="carousel-inner">
<div class="item active">
<div class="col-sm-6">
<h1><span >Pizza &</span> Burger</h1>
<h3 style="    color: skyblue;font-weight: 300">Handpicked For You</h3>
<p> </p>

</div>
<div class="col-sm-6">
<img src="v1.jpg" class="girl img-responsive" style="max-height:320px;"  alt="" />

</div>
</div>
<div class="item">
<div class="col-sm-6">
<h1><span >Cakes &</span> Bread</h1>
<h3  style="    color:skyblue;font-weight: 300">Happy Customers, Happy Us</h3>
<p> </p>

</div>
<div class="col-sm-6">
<img src="v2.jpg" class="girl img-responsive" style="max-height:320px;" alt="" />

</div>
</div>

<div class="item">
<div class="col-sm-6">
<h1><span >Breakfast &</span> Snacks</h1>
<h3  style="    color:skyblue;font-weight: 300">Let's Get Started</h3>
<p></p>

</div>
<div class="col-sm-6">
<img src="v3.jpg" class="girl img-responsive" style="max-height: 320px;"  alt="" />

</div>
</div>

</div>

<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
<i class="fa fa-angle-left"></i>
</a>
<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
<i class="fa fa-angle-right"></i>
</a>
</div>

</div>
</div>
</div>
</section>

<section>
<div class="container">
<div class="row">


<div class="col-sm-12 padding-right">
<div class="features_items" id="myTable">



<h2 class="title text-center">Items for you</h2>



<?php



$conn = Connect();

$sql = "SELECT * FROM products WHERE description='Breakfast & Snacks' ORDER BY F_ID";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
  $count=0;

  while($row = mysqli_fetch_assoc($result)){
    if ($count == 0)
      echo "<div class='row'>";


$sql1 = "SELECT * FROM user WHERE cid='".$row['F_ID']."'";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($result1);


?>




<div class="col-sm-4 amit" style="margin-left: auto;" >
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img src="<?php echo $row["images_path"]; ?>" style="width:100%;"   alt="" />
<h2 style="font-weight: 300">Rs:<?php echo $row["price"]; ?></h2>
<p><?php echo $row["name"]; ?></p>
<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
</div>
<div class="product-overlay">
<div class="overlay-content">
<h2><?php echo $row["price"]; ?></h2>
<p id="p_name"><?php echo $row["name"]; ?></p>


<form method="post" action="cart1.php?action=add&id=<?php echo $row["F_ID"]; ?>">


<input type="hidden" name="quantity" value="1">
<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">

<input type="hidden" name="hidden_img" value="<?php echo $row["images_path"]; ?>">





<button  type="submit" name="add"   class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>


</form>



</div>
</div>
</div>

</div>
</div>





<?php
$count++;
if($count==4)
{

  $count=0;
}
}
?>


<?php
}
else
{
  ?>

<div class="col-sm-4 amit" >
      <center>
         <label style="margin-left: 5px;color: red;"> <h1>Sorry... No item is available.</h1> </label>
        <p>Please order after sometime...! </p>
      </center>
       

</div>
  <?php

}

?>







</div>







</div>
</div>
</section>


<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByClassName("amit");
  console.log(tr);
  for (i = 0; i < tr.length; i++) {



    td = tr[i].getElementsByTagName("p")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>




<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/price-range.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
</body>
</html>
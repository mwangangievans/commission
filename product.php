<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
    <style>
      .product{  display: flex;
  align-items: center;
  justify-content: center;
    background-color: linen;
 }
  h1 {
  color: maroon;
  margin-left: 40px;
   display: flex;
  align-items: center;
  justify-content: center;
}.info{border-bottom:10px solid;}
    </style>
</head>
<body class="product">
    <ol>
       <?php 
    $tatol = ($_POST["Quantity"])*($_POST["Price"]);
    if($tatol > 100000){
      $commision = ((0.2)*($tatol));
    }else{
      $commision= ((0.1)*($tatol));
    }
    ?>
       <h1>Sales details</h1><br>
    <p class="info">Here is the information you have submitted:</p>
        <li><em>Salesman Number:</em><b><?php echo $_POST["phone"]?></b></li>
        <li><em>Product Number:</em><b><?php echo $_POST["product_no"]?></b></li>
        <li><em>Product Name:</em> <b><?php echo $_POST["product_name"]?></b></li>
        <li><em>Quantity:</em><b> <?php echo $_POST["Quantity"]?></b></li>
        <li><em>Price:</em> <?php echo $_POST["Price"]?></li>
        <li><em>Total Price:</em> <b><?php echo $tatol?></b></li><br>
        <h1>Your Commision is :<b><?php echo $commision?></b></h1>
    </ol></body></html>
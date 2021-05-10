<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="Main.css">

<div class="header">
  <a href="index.html">
    <img  href="index.html" src="Assets\LogoShopFront.JPG" alt="Shop logo">
  </a>
</div>

<div class="belowHead">
        <h1>Products </h1>
</div>

<div style="background-color:#1b1b1b; display:flex; justify-content: center; align-items: center;">
  <button onclick="location.href='https://theblhh.co.uk/adLogin.php'" type="button">admin login</button>
</div>

<div class="productsPageContent">

    <?php
       $pdo= new PDO("mysql:host=########;dbname=########","########","########");
       $query = "select * from Products";
       $d = $pdo->query($query);
    ?> 
    <div class="grid-container">
        <?php
        foreach ($d as $data){
        ?>    
            <div class="baws">
            <div class="small-grid-container">
            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $data['img'] ).'"/>';?>
           
            <div class="tprod-name"><?php echo $data['name']; ?>  </div>
            <div class="tprod-desc"><?php echo $data['desc']; ?></div>
            <div class ="tprod-price">£<?php echo $data['price']; ?></div>
            </div>
            </div>
        <?php
        }
        ?>


</div>

</div>;

<!--Icon bar-->
<div class="icon-bar">
  <a href="HairServices.php"><img src="Assets\scissorsIcon.png" alt="HairPrices">
    <br>
    <b>Haircuts</b>
  </a>
  <a href="Products.php"><img src="Assets\Gel-icon.png" alt="products">
    <br>
    <b>Products</b>
  </a>
  <a href="Booking.html"><img src="Assets\Calender.png" alt="Calender">
    <br>
    <b>Bookings</b>
  </a>
  <a href="Staff.html"><img src="Assets\staffIcon.png" alt="staff">
    <br>
    <b>Staff</b>
  </a>
  <a href="Contact.html"><img src="Assets\phoneIcon.png" alt="contact">
    <br>
    <b>Contact</b>
  </a>
</div>
<!--Link for the w3schools icon bar usage-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="Main.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />

<!-- Header class -->
<div class="header">
  <a href="index.html">
    <img  href="index.html" src="Assets\LogoShopFront.JPG" alt="Shop logo">
  </a>
</div>

<!-- Page title class -->
<div class="belowHead">
  <h1>Haircuts </h1>
</div>

<!-- Haircuts body class -->
<div class ="hcPageContent">
  <?php
        $DATABASE_HOST = 'localhost';
        $DATABASE_USER = 'thebscdn_rwhutton';
        $DATABASE_PASS = 'Graigue12';
        $DATABASE_NAME = 'thebscdn_Products';
        
        $conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME); //Connecting to the database

        $result = mysqli_query($conn,"SELECT * FROM prices"); //Retrieving data from prices table and put them into result variable

        echo "<table class='thair' style='width:90%'> 
        <tr>
        <th>Service</th>
        <th>Price</th>
        </tr>";
        
        while($row = mysqli_fetch_array($result)) //while loop to run until end of array 
        {
        echo "<tr>";
        echo "<td>" . $row['service'] . "</td>"; //Puts hair service into the first column 
        echo "<td>£" . $row['price'] . "</td>"; //Puts price into the second column
        echo "</tr>";
        }
        echo "</table>";
        
        mysqli_close($con);
        ?>
</div>

<!--Icon bar-->
<div class="icon-bar">
  <a href="HairServices.php"><img src="Assets\scissorsIcon.png" alt="Haircuts page">
    <br>
    <b>Haircuts</b>
  </a>
  <a href="Products.php"><img src="Assets\Gel-icon.png" alt="products page">
    <br>
    <b>Products</b>
  </a>
  <a href="Booking.html"><img src="Assets\Calender.png" alt="Booking page">
    <br>
    <b>Bookings</b>
  </a>
  <a href="Staff.html"><img src="Assets\staffIcon.png" alt="staff page">
    <br>
    <b>Staff</b>
  </a>
  <a href="Contact.html"><img src="Assets\phoneIcon.png" alt="contact page">
    <br>
    <b>Contact</b>
  </a>
</div>

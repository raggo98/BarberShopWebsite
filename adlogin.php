<?php
    $pdo= new PDO("mysql:host=########;dbname=########","########","########");
    if(isset($_POST['login']))
    {
        $user =$_POST['username'];
        $password =$_POST['password'];
        // checking against the email present in the database
        $usersearch ="select * from admin where username='$user'"; 
        $query = mysqli_query($conn,$usersearch); // reflecting it on the database

        $emailcount = mysqli_num_rows($query); // checking on the rows of database if the email is present
        if($emailcount)
        {
            $userpass = mysqli_fetch_assoc($query); // checking the email
            $dpass = $userpass['password'];// checking against the password in the database
            $_SESSION['username'] = $userpass['username'];
            $passdecode = password_verify($password, $dpass); // verifyig if the saved password and user password matches 
            
            if($passdecode)
            {
                echo "login successful";

            ?>
                <script> location.replace("index.html"); </script>  <!-- going to the page -->
            <?php

            }
            else if ($passdecode == false)
            {
                echo "incorrect password! try again";
            }

        }
        else 
        {
            echo "ivalid email";
        }
    }

?>

<html> 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Login Page </title>
<style> 
Body {
  font-family: Calibri, Helvetica, sans-serif;
  background-color: #1b1b1b;
  color: #ffffff;
}
button { 
       background-color: #CC5D0D; 
       width: 100%;
        color: #ffffff; 
        padding: 15px; 
        margin: 10px 0px; 
        border: none; 
        cursor: pointer; 
         } 
 form { 
        border: 3px solid #f1f1f1; 
    } 
 input[type=text], input[type=password] { 
        width: 100%; 
        margin: 8px 0;
        padding: 12px 20px; 
        display: inline-block; 
        border: 2px solid green; 
        box-sizing: border-box; 
    }
 button:hover { 
        opacity: 0.7; 
    } 
  .cancelbtn { 
        width: auto; 
        padding: 10px 18px;
        margin: 10px 5px;
    } 
      
   
 .container { 
        padding: 25px; 
        background-color: #333333;
    } 
</style> 
</head>  
<body>  
<?php
    $pdo= new PDO("mysql:host=localhost;dbname=thebscdn_Products","thebscdn_rwhutton","Graigue12");
    $query = "select * from admin";
    $d = $pdo->query($query);
?>
    <center> <h1> Admin Login </h1> </center> 
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="container"> 
            <label>Username : </label> 
            <input type="text" placeholder="Enter Username" name="username" required <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
            <span class="invalid-feedback"><?php echo $username_err; ?></span>
                
            <label>Password : </label> 
            <input type="password" placeholder="Enter Password" name="password" required <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
            <span class="invalid-feedback"><?php echo $password_err; ?></span>
            <button type="submit">Login</button> 
        </div> 
    </form>   
</body>   
</html>


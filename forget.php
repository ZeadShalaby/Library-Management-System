<?php
include "conection.php";
?>
<!DOCTYPE html>
<Html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-weidth,intal-scale=1.0">
    <link href="forget1.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Imperial+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>forget</title>


</head>

<body>
    <header>
              <div class="title"><div id="line"></div> <span id="type">Library Management System</span></div>
     <br> <br>
     <div class="logo" id="logo"><img src="img/9.png"></div>

        <form action="" method="post">

            <h2 style="color: rgb(8, 190, 214);">Search</h2>
            <input type="text" name="email" placeholder="your Email " required>
            <input type="password" name="password" placeholder="last password " required>
      

            <a href="http://localhost/Library_Management_System/user%20login.php" id="pp"><i class="fa fa-sign-out"></i>Feed back</a>
            <a href="http://localhost/Library_Management_System/contact-us.php" id="p"> Contact_Us ?</a>
            <a href="http://localhost/Library_Management_System/Sign%20up.php" id="p1"> Made account ?</a>
         
            <a href="http://localhost/Library_Management_System/login.php"><input type="submit" name="submit" value="login">
                <button type="reset" id="g7">reset</button>
            </a>
            <div id="icon">
                <a href="https://www.facebook.com/" target="_blank" style="color: rgb(2, 17, 188);" id="icon1">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
                <a href="https://www.instagram.com/ target=" -blank style="color: rgb(212, 35, 29)" id="icon2">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
                <a href="https://twitter.com/" target="_blank" style="color: rgb(53, 154, 172);" id="icon3">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a>
                <a href="https://www.google.com/" target="_blank" style="color: rgb(218, 233, 10);" id="icon4">
                    <ion-icon name="logo-google"></ion-icon>
                </a>
            </div>
            <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

        </form>
         <div id="line0"></di>
            <br> <br> 
        <script src="java 5chanal.js"></script>
    </header>
    
<?php
      if(isset($_POST['submit']))
      {
        $count=0;
        $sql="SELECT email from `student`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['email']==$_POST['email'])
          {
            $count=$count+1;
          }
        }

    if($count==0){
            ?>
          <script type="text/javascript">
           alert("not found this email");
          </script>
        <?php
        }

   else{
        if(mysqli_query($db,"UPDATE `student` SET password='$_POST[password]'WHERE email='$_POST[email]';"))
        ?>
          <script type="text/javascript">
           alert("Update successful");
          </script>
        <?php
         ?>
           <script type="text/javascript">
                window.location="user show table.php"
                </script>
          <?php
        }}
        
        ?>
</body>

</Html>

<body>



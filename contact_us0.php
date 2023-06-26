<?php
include "conection.php";
?>
<!DOCTYPE html>
<Html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-weidth,intal-scale=1.0">
    <link href="contact.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Imperial+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contact_Us</title>

 <style type="text/css">
        body
        {
            background-color: black;
        }
        .wrapper
        {
            padding: 10px;
            margin: -10px auto;
            width:700px;
            height: 400px;
            background-color: black;
            font-size: larger;
            opacity: .8;
            color: orange;
            border: 2px solid red ;
            border-radius: 20px;
        }
        .form-control
        {
            height: 80px;
            width: 85%;
            border-radius: 5px;
            border: 2px solid black;
        }
        .scroll
        {
            width: 100%;
            height: 300px;
            overflow: auto;
        }
        .btn{
            color: black;
            border-radius: 5px;
            border: 2px solid black;
        }

    </style>
</head>



<body>
    <header>
              <a href="http://localhost/Library_Management_System/login.php" id="p"><i class="fa fa-sign-out"></i>Feed_back</a>
              <div class="title"><div id="line"></div> <span id="type">Library Management System</span></div>
     <br> <br>
     <div class="logo" id="logo"><img src="img/9.png"></div>
  </header>

<div class="wrapper">
        <h4>If you have any suggesions or questions please comment below.</h4>
        <form style="" action="" method="post">
     <input class="form-control" type="text" name="comment" placeholder="Write something..." style="color:black;" required=""><br>    
    <input class="btn" type="submit" name="submit" value="Comment" style="width: 100px; height: 35px;"id="o" >     
        </form>
    
<br><br>
    <div class="scroll">
    
      <?php

      if(isset($_POST['submit']))
      {
        $count=0;
        $sql="SELECT comment from `coment`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['comment']==$_POST['comment'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          mysqli_query($db,"INSERT INTO `coment` VALUES('$_POST[comment]');");
        ?>
          <script type="text/javascript">
           alert("We Will Solved Your Problem Soon");
          </script>
        <?php
        }
        else{
            ?>
         <script type="text/javascript">
                alert("Write something...");
                </script>
        <?php

        }

      }
      ?>
    </div>
    </div>
    <section>
      <div id="line0"></di>
            <br> <br> 
       <footer id="footer">
        <div id="icon" style="color: rgb(0, 0, 0);">
            <a href="https://www.facebook.com/" target="_blank" style="color: rgb(2, 17, 188);">
                <ion-icon name="logo-facebook"></ion-icon>
            </a>
            <a href="https://www.instagram.com/" target="-blank" style="color: rgb(212, 35, 29)">
                <ion-icon name="logo-instagram"></ion-icon>
            </a>
            <a href="https://twitter.com/" target="_blank" style="color: rgb(53, 154, 172);">
                <ion-icon name="logo-twitter"></ion-icon>
            </a>
            <a href="https://www.google.com/" target="_blank" style="color: rgb(218, 233, 10);">
                <ion-icon name="logo-google"></ion-icon>
            </a>
        </div>
        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    </footer>
  </section>
</body>

</Html>
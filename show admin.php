<?php
include "conection.php";
?>
<!DOCTYPE html>
<Html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-weidth,intal-scale=1.0">
    <link href="show admin00.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Imperial+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Show Admin</title>


</head>

<body>
    <header>
              <div class="title"><div id="line"></div> <span id="type">Library Management System</span></div>
     <br> <br>
     <div class="logo" id="logo"><img src="img/9.png"></div>

      
      

            <a href="http://localhost/Library_Management_System/login.php" id="p"><i class="fa fa-sign-out"></i>Feed back</a>
              <div class="logo"><a href="#"><img src="img/images (3).png"style="width:160px; margin-left: -645px; border-radius:100px;margin-top: 25px;border: 2.5px solid lightgoldenrodyellow;"></a></div>
  
       
            <?php

   
  
  
        $res=mysqli_query($db,"SELECT * FROM `admin` ORDER BY `admin`.`first` ASC;");


            
            while($row=mysqli_fetch_assoc($res))
            {
          echo "<table  id='customers'>";

            
            echo "<td>";echo "<b> First name: </b>";echo "</td>";
                echo "<td>"; echo $row['first']; echo "</td>";
            
                echo "</tr>";
                echo "<tr>";
            
            echo "<td>";echo "<b> Last name: </b>";echo "</td>";
                echo "<td>"; echo $row['last']; echo "</td>";
            
                echo "</tr>";
                echo "<tr>";
            
            echo "<td>";echo "<b> your Email: </b>";echo "</td>";
                echo "<td>"; echo $row['email']; echo "</td>";
                
                echo "</tr>";
                echo "tr";
            
            echo "<td>";echo "<b> password: </b>";echo "</td>";
                echo "<td>"; echo $row['password']; echo "</td>";
              
                echo "</tr>";
                echo "<tr>";
            
            echo "<td>";echo "<b> Contact: </b>";echo "</td>"  ; 
                echo "<td>"; echo $row['contact']; echo "</td>";
             
                echo "</tr>";
                echo "</tr>";
            }
       
 
           ?>



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
         <script src="show.js"></script>
    </footer>
        <script src="java 5chanal.js"></script>
    </header>
    
</body>

</Html>

<body>

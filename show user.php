<?php
include "conection.php";

?>
<!DOCTYPE html>
<Html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-weidth,intal-scale=1.0">
    <link href="show user00.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Imperial+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>show user</title>
    <style type="text/css">
        
         .form-control
        {
            margin-top: 70px;
            background:black ;
            border-radius: 5px;
            color: darkgray;
            border: 2px solid orange;
        }
        .search{
            background: black;
            color: darkgray;
            border-radius: 5px;
            border: 2px solid orange;
        }
         .search:hover{
            background: black;
            color: lightgray;
            border-radius: 5px;
            border: 2px solid skyblue;
        }

    </style>


</head>

<body>
    <header>
              <div class="title"><div id="line"></div> <span id="type">Library Management System</span></div>
     <br> <br>
     <div class="logo" id="logo"><img src="img/9.png"></div>

      
      

            <a href="http://localhost/Library_Management_System/user show table.php" id="p"><i class="fas fa-sign-out-alt"></i>Feed back</a>

            <div>
          <form class="navbar-form" method="post" name="form1">
              <div>
                  <input class="form-control" type="password" name="password" placeholder="your password.." required=" " style="margin-top: 3px; margin-left:65px; padding: 5px;">
                  <button class="search" type="submit" name="submit" style="margin-top:28px; margin-left: 5px; padding: 2px;" > show
                      
                  </button>
              </div>
          </form>
      </div>
   

            <?php

   
   if(isset($_POST['submit']))
      {
               $count=0;
               $res=mysqli_query($db,"SELECT * FROM `student`WHERE password='$_POST[password]';");
               $count=mysqli_num_rows($res);
   
            if($count==0){
                ?>
           <script type="text/javascript">
           alert("your are not honor for this account");
             window.location="index.php"

          </script>
        <?php
            }
            else{
            while($row=mysqli_fetch_assoc($res))
            {
                echo "<a href='http://localhost/Library_Management_System/edit user profile.php' id='p1'><i class='far fa-edit'></i></a>";
  
              echo "div class='logo'><a href='#'><img src='img/pmc1.png'style='width:160px; margin-left: 611px;margin-top:-45px; border-radius: 100px; border: 2.5px solid lightgoldenrodyellow;'></a></div>";
         
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


        }}
       
 
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
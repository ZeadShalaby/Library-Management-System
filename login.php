<?php
include "conection.php";
?>
<!DOCTYPE html>
<Html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-weidth,intal-scale=1.0">
    <link href="login1.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Imperial+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>login</title>
 <style type="text/css">
    body {
            font-family: 'Lato', sans-serif;
          }
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


.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: mintcream;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: blue;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
 </style>
    </head>

<body>
    <header>

            
              <div class="title"><div id="line"></div> <span id="type">Library Management System</span></div>
               <div class="logo"><a href="http://localhost/Library_Management_System/show%20admin.php"><img src="img/images (3).png"style="width:47px; margin-left: -118px; border-radius:100px;margin-top: -2.5px;border: 2px solid lightcoral;"></a></div>
               <a href="http://localhost/Library_Management_System/show%20admin.php"><span style="color: lightseagreen; margin-left: 1297px; text-decoration: none;">Admin.page</span></a>
     <br> <br>
     <div class="logo" id="logo"><img src="img/9.png" style="margin-top:-10px; border-radius: 30px;"></div>
 <div>

          <form class="navbar-form" method="post" name="form1">
              <div>
                  <input class="form-control" type="text" name="search" placeholder="search books.." required=" " style="margin-top: -2px; margin-left:-10px">
                  <button class="search" type="submit" name="submit" style="margin-top:30px; margin-left: 2px;" > search
                      
                  </button>
              </div>
          </form>
      </div>

     <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
     <a href="http://localhost/Library_Management_System/login.php"><i class="fa fa-fw fa-home"></i></a>
   <a href="http://localhost/Library_Management_System/show%20admin.php">  <i class="glyphicon glyphicon-user"></i></a>
    <a href="http://localhost/Library_Management_System/add.php"><i class="glyphicon glyphicon-wrench"></i></a>
    <a href="http://localhost/Library_Management_System/contact_us0.php"><i class="fa fa-fw fa-envelope"></i></a>
    <a href="http://localhost/Library_Management_System/"><i class="fas fa-power-off"></i></a>
  </div>
</div>

<span id="p" style="font-size:30px; cursor:pointer" onclick="openNav()" style="margin-right:20px;">&#9776;</span>

<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


          </header>
    <?php

    

      if(isset($_POST['submit']))
      {
        $count=0;
        $re=mysqli_query($db,"SELECT * FROM `books`WHERE name='$_POST[search]';");
        $count=mysqli_num_rows($re);
        if($count==0)
        {
        ?>
           <script type="text/javascript">
           alert("your Book not found try again");
          </script>
        <?php
          $res=mysqli_query($db,"SELECT * FROM `books` ORDER BY `books`.`name` ASC;");

        echo "<table id='customers' >";
            echo "<tr>";
                //Table header
                echo "<th>"; echo "ID"; echo "</th>";
                echo "<th>"; echo "Book-Name";  echo "</th>";
                echo "<th>"; echo "Authors Name";  echo "</th>";
                echo "<th>"; echo "Edition";  echo "</th>";
                echo "<th>"; echo "Status";  echo "</th>";
                echo "<th>"; echo "Quantity";  echo "</th>";
                echo "<th>"; echo "Department";  echo "</th>";
            echo "</tr>";   

            while($row=mysqli_fetch_assoc($res))
            {
                echo "<tr>";
                echo "<td>"; echo $row['bid']; echo "</td>";
                echo "<td>"; echo $row['name']; echo "</td>";
                echo "<td>"; echo $row['authors']; echo "</td>";
                echo "<td>"; echo $row['edition']; echo "</td>";
                echo "<td>"; echo $row['status']; echo "</td>";
                echo "<td>"; echo $row['quantity']; echo "</td>";
                echo "<td>"; echo $row['department']; echo "</td>";

                echo "</tr>";
            }
        echo "</table>";
        
        }
        else
        {
          
                    echo "<table id='customers' >";
            echo "<tr>";
                //Table header
                echo "<th>"; echo "ID"; echo "</th>";
                echo "<th>"; echo "Book-Name";  echo "</th>";
                echo "<th>"; echo "Authors Name";  echo "</th>";
                echo "<th>"; echo "Edition";  echo "</th>";
                echo "<th>"; echo "Status";  echo "</th>";
                echo "<th>"; echo "Quantity";  echo "</th>";
                echo "<th>"; echo "Department";  echo "</th>";
            echo "</tr>";   

    while($row=mysqli_fetch_assoc($re))
            {
                echo "<tr>";
                echo "<td>"; echo $row['bid']; echo "</td>";
                echo "<td>"; echo $row['name']; echo "</td>";
                echo "<td>"; echo $row['authors']; echo "</td>";
                echo "<td>"; echo $row['edition']; echo "</td>";
                echo "<td>"; echo $row['status']; echo "</td>";
                echo "<td>"; echo $row['quantity']; echo "</td>";
                echo "<td>"; echo $row['department']; echo "</td>";

                echo "</tr>";
            }
        echo "</table>";
         

        }}


  else{ 
  
        $res=mysqli_query($db,"SELECT * FROM `books` ORDER BY `books`.`name` ASC;");

        echo "<table id='customers' >";
            echo "<tr>";
                //Table header
                echo "<th>"; echo "ID"; echo "</th>";
                echo "<th>"; echo "Book-Name";  echo "</th>";
                echo "<th>"; echo "Authors Name";  echo "</th>";
                echo "<th>"; echo "Edition";  echo "</th>";
                echo "<th>"; echo "Status";  echo "</th>";
                echo "<th>"; echo "Quantity";  echo "</th>";
                echo "<th>"; echo "Department";  echo "</th>";
            echo "</tr>";   

            while($row=mysqli_fetch_assoc($res))
            {
                echo "<tr>";
                echo "<td>"; echo $row['bid']; echo "</td>";
                echo "<td>"; echo $row['name']; echo "</td>";
                echo "<td>"; echo $row['authors']; echo "</td>";
                echo "<td>"; echo $row['edition']; echo "</td>";
                echo "<td>"; echo $row['status']; echo "</td>";
                echo "<td>"; echo $row['quantity']; echo "</td>";
                echo "<td>"; echo $row['department']; echo "</td>";

                echo "</tr>";
            }
        echo "</table>";
         }
 
           ?>

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
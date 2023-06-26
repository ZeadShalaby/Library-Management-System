<?php
include "conection.php";
?>

<!DOCTYPE html>
<Html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-weidth,intal-scale=1.0">
    <link href="delete0.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Delete/Books</title>


       <style>
body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: deepskyblue;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>


</head>

<body>
    <header>
            <div class="title"><div id="line"></div> <span id="type">Library Management System</span></div>

     <br> <br>
     <div class="logo" id="logo"><img src="img/9.png"></div>

        <form action="" method="post">
         <div class="title"><div id="line5"></div><span id="type1">DELETE_BOOKS</span></div>
             <br> <br>
            <input type="text1"     name="bid"  placeholder="numper" required="">
            <input type="text2"     name="name"  placeholder="book Name" required="">
            <input type="text"      name="authors"  placeholder="authors" required="">
            <input type="password1"  name="edition"  placeholder="edition" required="">
            <br> <br>
              
            <br>
             <input type="submit" name="submit" id="buy" value="Delete">
                <button type="reset" id="g7">reset</button>
                </fieldset>
        </form>
        <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="http://localhost/Library_Management_System/login.php"><i class="fa fa-fw fa-home">Admin</i></a>
    <a href="http://localhost/Library_Management_System/update.php"><i class="far fa-edit">Edit</i></a>
    <a href="http://localhost/Library_Management_System/add.php"><i class="fas fa-paper-plane">Add</i></a>
</div>

<span id="p0" style="font-size:30px; right: 85px; cursor:pointer" onclick="openNav()">&#9776;</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <script src="java-script.js"></script>
        <main id="content0">
            <section id="alert"></section>
        </main>
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
    </header>
<?php

      if(isset($_POST['submit']))
      {
        $count=0;
        $sql="SELECT bid from `books`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['bid']==$_POST['bid'])
        {
            $count=$count+1;
          mysqli_query($db,"DELETE FROM`books` where bid='$_POST[bid]';");
        ?>
          <script type="text/javascript">
           alert("Delet successful");
          </script>
        <?php
        ?>
           <script type="text/javascript">
                window.location="login.php"
                </script>
          <?php
        }
        }
        if($count==0)
        {

          ?>
            <script type="text/javascript">
              alert("The books not exist.");
            </script>
          <?php

        }

      }

    ?>

</body>

</Html>
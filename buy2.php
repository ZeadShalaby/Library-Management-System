<?php
include "conection.php";
?>

<!DOCTYPE html>
<Html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-weidth,intal-scale=1.0">
    <link href="buy0.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>BUY/Books</title>

   


</head>

<body>
    <header>
             <a href="http://localhost/Library_Management_System/user show table.php" id="p"><i class="fas fa-sign-out-alt"></i>Feed back</a>

            <div class="title"><div id="line"></div> <span id="type">Library Management System</span></div>

     <br> <br>
     <div class="logo" id="logo"><img src="img/9.png"></div>

        <form action="" method="post">
         <div class="title"><div id="line5"></div><span id="type1">BUY_BOOKS</span></div>
             <br> <br>
            <input type="text1"     name="id"  placeholder=" id numper " required="">
            <input type="text2"     name=" bookname"  placeholder="book Name" required="">
            <input type="text"      name="authors"  placeholder="authors" required="">
            <input type="password1"  name="number"  placeholder="how much book.?" required="">
            <input type="password2" name="email"  placeholder="your Email" required="">

            <br> <br>
              
   
            <br>
             <input type="submit" name="submit" id="buy" value="BUY">
                <button type="reset" id="g7">reset</button>
                </fieldset>

        </form>



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
        $sql="SELECT email from `student`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['email']==$_POST['email'])
          {
            $count=$count+1;
          }
        }
        if($count>0)
        {
          mysqli_query($db,"INSERT INTO `buy` VALUES('$_POST[id]', '$_POST[bookname]','$_POST[authors]',  '$_POST[number]', '$_POST[email]');");
        ?>
          <script type="text/javascript">
           alert("BUY_BOOKS successful.Thank you for doing business with us");
          </script>
        <?php
        }
        else{
            ?>
          <script type="text/javascript">
           alert("your email are wrong  try again");
          </script>
        <?php

        }

      }

    ?>

</body>

</Html>
<?php
include "conection.php";
?>

<!DOCTYPE html>
<Html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-weidth,intal-scale=1.0">
    <link href="Sign up.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>User/Sign up</title>

</head>

<body>
    <header>
            <div class="title"><div id="line"></div> <span id="type">Library Management System</span></div>
            <a href="http://localhost/Library_Management_System/" id="p0" style="margin-top: -7px;"><i class="fa fa-sign-out"></i>Feedback</a>

     <br> <br>
     <div class="logo" id="logo"><img src="img/9.png"></div>

        <form action="" method="post">
         <div class="title"><div id="line5"></div><span id="type1">User Sign Up</span></div>
             <br> <br>
            <input type="text1"     name="first"  placeholder="First Name" required="">
            <input type="text2"     name="last"  placeholder="Last Name" required="">
            <input type="text"      name="email"  placeholder="Your Email" required="">
            <input type="password"  name="password"  placeholder="passsword" required="">
            <input type="password1" name="contact"  placeholder="enter your phone" required="">
            <br> <br>
            <select name="Day" id="bd"> <br>
                <tr>
                    <th>
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="4"> 4 </option>
                        <option value="5"> 5 </option>
                        <option value="6"> 6 </option>
                        <option value="7"> 7 </option>
                        <option value="8"> 8 </option>
                        <option value="9"> 9 </option>
                        <option value="10"> 10 </option>
                        <option value="11"> 11 </option>
                        <option value="12"> 12 </option>
                        <option value="13"> 13 </option>
                        <option value="14"> 14 </option>
                        <option value="15"> 15 </option>
                        <option value="16"> 16 </option>
                        <option value="17"> 17 </option>
                        <option value="18"> 18 </option>
                        <option value="19"> 19 </option>
                        <option value="20"> 20 </option>
                        <option value="21"> 21 </option>
                        <option value="22"> 22 </option>
                        <option value="23"> 23 </option>
                        <option value="24"> 24 </option>
                        <option value="25"> 25 </option>
                        <option value="26"> 26 </option>
                        <option value="27"> 27 </option>
                        <option value="28"> 28 </option>
                        <option value="29"> 29 </option>
                        <option value="30"> 30 </option>
                        <option value="31"> 31 </option>
                    </th>
                </tr>
            </select>
            <select name="Your Month"> <br>
                <tr>
                     <th>
                              <option value="January">1</option>
                            <option value="January">2</option>
                           <option value="January">3</option>
                          <option value="January">4</option>
                         <option value="January">5</option>
                       <option value="January">6</option>
                         <option value="January">7</option>
                          <option value="January">8</option>
                           <option value="January">9</option>
                            <option value="January">10</option>
                             <option value="January">11</option>
                               <option value="January">12</option>
                    </th>
                </tr>
            </select>
            <select name="Year"> <br>
                <tr>
                    <th>
                                                 <option value="January">1995</option>
                                               <option value="February">1996</option>
                                             <option value="March">1997</option>
                                           <option value="April">1998</option>
                                         <option value="May">1999</option>
                                       <option value="June">2000</option>
                                    <option value="August">2001</option>
                                  <option value="August"> 2002</option>
                                <option value="September">2003</option>
                              <option value="october">2004</option>
                            <option value="November">2005</option>
                          <option value="December">2006</option>
                        <option value="December">2007</option>
                          <option value="December">2007</option>
                            <option value="December">2007</option>
                              <option value="December">2007</option>
                                <option value="December">2007</option>
                                  <option value="December">2007</option>
                                    <option value="December">2007</option>
                                      <option value="December">2007</option>
                                        <option value="December">2007</option>
                                          <option value="December">2007</option>
                                            <option value="December">2007</option>
                                              <option value="December">2007</option>
                                                <option value="December">2007</option>
                                                  <option value="December">2007</option>
                                                    <option value="December">2007</option>
                                                      <option value="December">2007</option>
                    </th>
                </tr>
            </select> <br>
            <br>
            <b id="kj"><b style="color: honeydew;">SIZE:  </b>
                <input type="radio" name="gender" value="male" checked> <b style="color: rgb(0,208,231);">Male</b>
                <input type="radio" name="gender" value="male" checked> <b style="color: rgb(200, 24, 55);">Female</b>
             <input type="submit" name="submit" id="buy" value="sign up">
                <button type="reset" id="g7">reset</button>
                </fieldset>



        </form>
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
        $sql="SELECT last from `student`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['last']==$_POST['last'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          mysqli_query($db,"INSERT INTO `STUDENT` VALUES('$_POST[first]', '$_POST[last]','$_POST[email]',  '$_POST[password]', '$_POST[contact]');");
        ?>
          <script type="text/javascript">
           alert("Registration successful");
          </script>
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The username already exist.");
            </script>
          <?php

        }

      }

    ?>

</body>

</Html>

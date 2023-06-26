<?php 
$db=mysqli_connect("localhost","root","","library"); /* server name , username , password ,database name */
/*if(!$db){
	die("Connection failed:". mysqli_connect_error());
}
echo "Connected successfully.";

/*to know the web is conect with a database or not*/

/*mysqli_query($db,"INSERT INTO `STUDENT` VALUES('$_POST[Firstname]','$_POST[Lastname]','$_POST[Your Email]','$_POST[passsword]','$_POST[contact]');");*/


/*
 <?php

      if(isset($_POST['submit']))
      {
        $count=0;
          $res=mysqli_query($db,"SELECT * FROM `student`WHERE email='soso@gmail.com'&& password='soso';");
          $count=mysqli_num_rows($res);

          if($count==0)
          {
            ?>
               <script type="text/javascript">
           alert("your Email or password are wrong");
          </script>
            <?php
          }
          else
          {
            ?>
                 <script type="text/javascript">
                window.location="index.php"
                </script>
            >?php
          }

      }

      ?>

*/





?>
<?php
$dis_1=$_POST['usrname'];
$dis_2=$_POST['pass'];
$sql = "SELECT fname,lname,email,phonenumber FROM user WHERE username='$dis_1' and pass_word='$dis_2' ";
$result = $conn->query($sql);

  $row = $result->fetch_row();
  $_SESSION['user'] =  $row;
  print_r ($_SESSION);

?>
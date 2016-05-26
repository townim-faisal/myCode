<?php
$conn = mysql_connect("localhost", "root", "root");
mysql_select_db("hadith");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

if (isset($_POST["submit"])){
  $hadithNo= $_POST["hadithNo"];
  $tuhfaNo= $_POST["tuhfaNo"];
  $kitabNo= $_POST["kitabNo"];
  $baabNo= $_POST["baabNo"];
  $intrnlRptn= $_POST["intrnlRptn"];
  $subTag= $_POST["subTag"];
  $emailAdd= $_POST["emailAdd"];
  $phoneNo= $_POST["phoneNo"];
  $hadithEng= $_POST["hadithEng"];
  $commentary1 = $_POST["commentary1"];
  $hadithArb= $_POST["hadithArb"];
  $commentary2 = $_POST["commentary2"];
  
  if (empty($hadithNo)||empty($tuhfaNo)||empty($kitabNo)||empty($baabNo)||empty($intrnlRptn)||empty($subTag)||empty($emailAdd)||empty($phoneNo)) {
	echo "<script>alert('Any field is empty')</script>";
	exit();
   }

  if (!filter_var($emailAdd, FILTER_VALIDATE_EMAIL)) {
    echo "<script>alert('Invalid email format')</script>"; 
    exit();
  }
  
  $query= "INSERT INTO hdthTbl (hadithno, tuhfano, kitabno, baabno, intrnlrptn, subtag, emailadd, phoneno, haditheng, commentary1, haditharb, commentary2) VALUES ('$hadithNo', '$tuhfaNo', '$kitabNo','$baabNo', '$intrnlRptn', '$subTag', '$emailAdd', '$phoneNo', '$hadithEng', '$commentary1', '$hadithArb', '$commentary2')";

  if (mysql_query($query)) {
    echo "<center><h1>Post has been published</h1></center>";
    } 
 }
?>
<?php

// If select options php  works in html, then it would uncommented
/*
$kitaabs = array ("Kitaab1", "Kitaab2", "Kitaab3", "Kitaab4"); 
$books = array ("Book1", "Book2", "Book3", "Book4"); 
$chapters = array ("Chapter1", "Chapter2", "Chapter3", "Chapter4"); 
*/ 

include "insert.php";

?>

<!--        HTML BEGINS       -->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sunni Canon</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="error.css">
  <!-- Always first jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> 
  <!-- Then other jQery libraries -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
  <script src="jquery.maskedinput.js" type="text/javascript"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mockjax/1.6.2/jquery.mockjax.js"></script>

  <script type="text/javascript" src="validate.js"></script>  
  <script type="text/javascript" src="json.js"></script>
</head>
<body>

<div class="container"> <!-- START CONTAINER -->
  <div class="row"> 
    <div class="col-md-6 col-sm-5 col-xs-6">
    <h3>ADD A HADITH</h3>
    </div>
    <div class="col-md-6 col-sm-7 col-xs-6 ">
    <a class="btn btn-primary pull-right" href="#" role="button" style="margin-top: 15px; margin-right: px;">UPLOAD</a>
    </div>
  </div>  
  

  <form id="myForm" action="insert.php" method="post">  <!-- START FORM -->
   
  <!-- START VARIOUS NUMBER  -->
    <div class="row">

    <div class="col-md-3 col-sm-6">
      <div class="form-group">
        <label for="exampleHadithNo">Hadith Number</label>
        <input type="text" class="form-control" id="exampleHadithNo" placeholder="Enter Hadith #" name="hadithNo">
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="form-group">
        <label for="exampleTuhfaNo">Tuhfa Number</label>
        <input type="text" class="form-control" id="exampleTuhfaNo" placeholder="Enter Tuhfa #" name="tuhfaNo">
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="form-group">
        <label for="exampleKitabNo">Kitab Number</label>
        <input type="text" class="form-control" id="exampleKitabNo" placeholder="Enter Kitab #" name="kitabNo">
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="form-group">
        <label for="exampleBaabNo">Baab Number</label>
        <input type="text" class="form-control" id="exampleBaabNo" placeholder="Enter Baab #" name="baabNo">
      </div>
    </div>

    </div>
    <!-- END VARIOUS NUMBER  -->

    <!-- START SELECTIONS -->
    <div class="row">
      <div class="col-md-6"> 
        <div class="form-group ">
          <label for="kitaabtitle">Kitaab Title</label>
          <select class="form-control" id="kitaabtitle" name="item1" required>
          	<option value="">Select..</option>
            
            <!-- ?php 
            for($x = 0; $x < count($kitaabs); $x++) {
              echo "<option value = '".$kitaabs[$x]."'>".$kitaabs[$x]."</option>";
              echo "<br>";
            }
            ?> -->

            <!-- <option value="1">..</option>
            <option value="2">..</option>
            <option value="3">..</option>
            <option value="4">..</option> -->
          </select>
        </div>
      </div>

      <div class="col-md-6">
        <div class= "form-group">
          <label for="booktitle">Book Title</label>
          <select class="form-control" id="booktitle" name="item2">
            <!-- <option value="">Select..</option> -->
            
            <!-- ?php 
            for($x = 0; $x < count($books); $x++) {
              echo "<option value = '".$books[$x]."'>".$books[$x]."</option>";
              echo "<br>";
            }
            ?> -->
            
            <!-- <option value="1">..</option>
            <option value="2">..</option>
            <option value="3">..</option>
            <option value="4">..</option> -->
          </select>
        </div>    
      </div>

      <div class="col-md-6"> 
        <div class="form-group ">
          <label for="chaptertitle">Chapter Title</label>
          <select class="form-control" id="chaptertitle" name="item3">
           <!-- <option value="">Select..</option> -->
           
           <!-- ?php 
            for($x = 0; $x < count($chapters); $x++) {
              echo "<option value = '".$chapters[$x]."'>".$chapters[$x]."</option>";
              echo "<br>";
            }
            ?> -->

            <!-- <option value="1">..</option>
            <option value="2">..</option>
            <option value="3">..</option>
            <option value="4">..</option> -->
          </select>
        </div>
      </div>
      
    </div>
    <!-- END SELECTIONS -->

    <div class="form-group">
      <label for="exampleIntRpt">Internal Repeatations</label>
      <input type="text" class="form-control" id="exampleIntRpt" placeholder="Internal Repeatations" name="intrnlRptn">
    </div>

    <div class="form-group ">
      <label for="exampleSubTag">Subject Tags</label>
      <input type="text" class="form-control" id="exampleSubTag" placeholder="Subject Tags (seperated by comma)" name="subTag">
    </div>  

    <div class="form-group ">
      <label for="exampleEmail">Email</label>
      <input type="text" class="form-control" id="exampleEmail" placeholder="Enter yor email like yourname@ivivelabs.com" name="emailAdd">
    </div> 

    <div class="form-group ">
      <label for="examplePhone">Phone No</label>
      <input type="text" class="form-control" id="examplePhone" placeholder="Enter your phone no e.g. grameenphone like +88017XXXXXXXX " name="phoneNo">
    </div> 

  <div> <!-- START TAB -->
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" style="margin-bottom: 15px;" role="tablist">
      <li role="presentation" class="active">
        <a href="#hadithEnglish" aria-controls="home" role="tab" data-toggle="tab">Hadith Text (English)</a>
      </li>
      <li role="presentation">
        <a href="#hadithArabic" aria-controls="profile" role="tab" data-toggle="tab">Hadith Text (Arabic)</a>
      </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="hadithEnglish">
        <textarea class="form-control" style="margin-bottom: 10px;" rows="5" id="haditheng" placeholder="Enter hadith text in english" name="hadithEng"></textarea>
        <label for="commentary1">Commentary</label>
        <textarea class="form-control" rows="5" id="commentary1" placeholder="Enter commentary" name="commentary1"></textarea>
      </div>
      <div role="tabpanel" class="tab-pane" id="hadithArabic">
        <textarea class="form-control" style="margin-bottom: 10px;" rows="5" id="haditharb" placeholder="Enter hadith text in arabic" name="hadithArb"></textarea>
        <label for="commentary2">Commentary</label>
        <textarea class="form-control" rows="5" id="commentary2" placeholder="Enter commentary" name="commentary2"></textarea>
      </div>
    </div>
  </div> <!-- END TAB -->

  
  <button type="submit" style="margin-top: 15px;" class="btn btn-default" name="submit">Submit</button>
  

  </form> <!-- END FORM -->

  
</div> <!-- END CONTAINER -->

</body>
</html>
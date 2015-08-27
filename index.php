<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--css-->
    <link rel="stylesheet" href="script/css/bootstrap.min.css" />    
    <link rel="stylesheet" href="script/css/freelancer.css" />   
     <!--css-->
</head>
<style>
    .col-lg-1 {
      border: dotted 1px ;
    }
</style>

<body id="page-top" class="index">
<div class="container">
<div class="row"> 

<?php

if (!empty($_POST)) {
  
    $numm = $_POST;
   
     foreach($numm as $land => $data){
         // echo count($numm);
          //echo count($value);
          $ank = '<table align="center" border="1" cellspacing="0"  bgcolor="#EAF4FF" width="100%" >';
         // $ank .= "<tr>"
          foreach($data as $detail => $value){
              $ank .= "<tr>";
             //echo count($value);    
              foreach($value as $details => $values){                                          
               //echo " arr1  " . $land . "  arr2  " . $detail . "  = " . $values . "<br>";  
               $ank .= '<div class="col-lg-1">';
               $ank .= $values;
               $ank .= "</div>";
              }
               $ank .= "</tr>";
          }
          //$ank .= "</tr>";
          $ank .= "</table>"; 
      }
      echo count($data);
      echo "<br>";
      echo $ank;   
      ?>
      </div>
 </div>      
      <?php 
      die;
}
?>
<form action='' method='POST'>
    <?php for ($i = 0; $i < 100; $i++): ?>
        <?php for ($j = 0; $j < 105; $j++): ?>
            <input type='text' name='ch[<?= $i ?>][]' value='<?= $j ?>' />
           
        <?php endfor; ?>
    <?php endfor; ?>
    <input type='submit' />
</form>

<!--js-->
<script src="script/js/jquery.min.js"></script> 
<script src="script/js/jquery.js"></script> 
<script src="script/js/bootstrap.min.js"></script>
<!--end js-->
</body>
</html>


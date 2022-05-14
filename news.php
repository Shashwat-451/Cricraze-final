<?php
$url="https://newsapi.org/v2/top-headlines?country=in&category=sports&apiKey=7e08d5033c414a0bb17ce49b9428074a";

//file get contents give all data to result variable in json format
$result=file_get_contents($url);
//now json_decode converts all data from json format into arrays and store in result 
$result=json_decode($result,true);
echo "<pre>";
print_r($result);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ScoreBoard</title>

    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
     

   
        <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="news.css">
   

  </head>
 <body style="background-color:white;font-family:Sans-serif">

 <nav class="navbar navbar-dark navbar-expand-sm  fixed-top bg-dark" >
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
         <span class="navbar-toggler-icon"></span>
         </button>
     
      <div  class="collapse navbar-collapse" id="Navbar">
         <ul  class="navbar-nav ">
          <li class="nav-item active"><a class="nav-link" href="#"><i class='fas fa-baseball-ball'></i> Home</a></li>
            <li  class="nav-item"><a class="nav-link" href="#"><span class="fa fa-home fa-lg"></span> Live Score</a></li>
            <li class="nav-item"><a class="nav-link" href="./aboutus.html"><span class="fa fa-info fa-lg"></span> Schedule</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><span class="fa fa-list fa-lg"></span> Team</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class='fas fa-baseball-ball'></i> IPL</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class='fas fa-baseball-ball'></i> News</a></li>
         </ul>
    
   </div>
  
  </nav>
  

   <?php
   $i=0;?>

<h1 class="title">Sports News</h1>

<div class="container">

    <div class="row">
      <div class=" col-12">
      <?php
     
     echo "<p style='color:red;font-family:Times New Roman;font-size:20px'>" .$result['articles'][$i++]['title'] . "</p>";
      ?>  
</div>
</div>

<div class="row">
  <div class="col-12 col-sm-3">
<?php
     echo '<img src="'.$result['articles'][0]['urlToImage'].'">';
      ?> 

</div>
<div class="col-12 col-sm-9">
<?php
     echo "<p style='color:black;font-family:Times New Roman;font-size:20px;'>" .$result['articles'][0]['content'] . "</p>";
      ?>  

      <a href="<?php $result['url'] ?>" ><button type="button">Read More</button></a>
</div>

      </div>



<!--2nd Article-->
<div class="row">
      <div class=" col-12">
      <?php
     
     echo "<p style='color:red;font-family:Times New Roman;font-size:20px'>" .$result['articles'][1]['title'] . "</p>";
      ?>  
</div>
</div>

<div class="row">
  <div class="col-12 col-sm-3">
<?php
     echo '<img src="'.$result['articles'][1]['urlToImage'].'">';
      ?> 

</div>
<div class="col-12 col-sm-9">
<?php
     echo "<p style='color:black;font-family:Times New Roman;font-size:20px;'>" .$result['articles'][1]['content'] . "</p>";
      ?>  
</div>

      </div>

 
 
      <div class="row">
      <div class=" col-12">
      <?php
     if(isset($result['urlToImage'])){
     echo "<p style='color:red;font-family:Times New Roman;font-size:20px'>" .$result['articles'][3]['title'] . "</p>";
        }   ?>  
</div>
</div>

<div class="row">
  <div class="col-12 col-sm-3">
<?php
     echo '<img src="'.$result['articles'][3]['urlToImage'].'">';
      ?> 

</div>
<div class="col-12 col-sm-9">
<?php
     echo "<p style='color:black;font-family:Times New Roman;font-size:20px;'>" .$result['articles'][3]['content'] . "</p>";
      ?>  
</div>

      </div>




      <div class="row">
      <div class=" col-12">
      <?php
      if (!empty($result['urlToImage'])){
     echo "<p style='color:red;font-family:Times New Roman;font-size:20px'>" .$result['articles'][4]['title'] . "</p>";
       }  ?>  
</div>
</div>

<div class="row">
  <div class="col-12 col-sm-3">
<?php
     echo '<img src="'.$result['articles'][4]['urlToImage'].'">';
      ?> 

</div>
<div class="col-12 col-sm-9">
<?php
     echo "<p style='color:black;font-family:Times New Roman;font-size:20px;'>" .$result['articles'][4]['content'] . "</p>";
      ?>  
</div>

      </div>



      <div class="row">
      <div class=" col-12">
      <?php
     
     echo "<p style='color:red;font-family:Times New Roman;font-size:20px'>" .$result['articles'][5]['title'] . "</p>";
      ?>  
</div>
</div>

<div class="row">
  <div class="col-12 col-sm-3">
<?php
     echo '<img src="'.$result['articles'][5]['urlToImage'].'">';
      ?> 

</div>
<div class="col-12 col-sm-9">
<?php
     echo "<p style='color:black;font-family:Times New Roman;font-size:20px;'>" .$result['articles'][5]['content'] . "</p>";
      ?>  
</div>

      </div>





      
      <div class="row">
      <div class=" col-12">
      <?php
     
     echo "<p style='color:red;font-family:Times New Roman;font-size:20px'>" .$result['articles'][6]['title'] . "</p>";
      ?>  
</div>
</div>

<div class="row">
  <div class="col-12 col-sm-3">
<?php
     echo '<img src="'.$result['articles'][6]['urlToImage'].'">';
      ?> 

</div>
<div class="col-12 col-sm-9">
<?php
     echo "<p style='color:black;font-family:Times New Roman;font-size:20px;'>" .$result['articles'][6]['content'] . "</p>";
      ?>  
</div>

      </div>




      
      <div class="row">
      <div class=" col-12">
      <?php
     
     echo "<p style='color:red;font-family:Times New Roman;font-size:20px'>" .$result['articles'][7]['title'] . "</p>";
      ?>  
</div>
</div>

<div class="row">
  <div class="col-12 col-sm-3">
<?php
     echo '<img src="'.$result['articles'][7]['urlToImage'].'">';
      ?> 

</div>
<div class="col-12 col-sm-9">
<?php
     echo "<p style='color:black;font-family:Times New Roman;font-size:20px;'>" .$result['articles'][7]['content'] . "</p>";
      ?>  
</div>

      </div>






      
      <div class="row">
      <div class=" col-12">
      <?php
     
     echo "<p style='color:red;font-family:Times New Roman;font-size:20px'>" .$result['articles'][8]['title'] . "</p>";
      ?>  
</div>
</div>

<div class="row">
  <div class="col-12 col-sm-3">
<?php
     echo '<img src="'.$result['articles'][8]['urlToImage'].'">';
      ?> 

</div>
<div class="col-12 col-sm-9">
<?php
     echo "<p style='color:black;font-family:Times New Roman;font-size:20px;'>" .$result['articles'][8]['content'] . "</p>";
      ?>  
</div>

      </div>





      
      <div class="row">
      <div class=" col-12">
      <?php
     
     echo "<p style='color:red;font-family:Times New Roman;font-size:20px'>" .$result['articles'][9]['title'] . "</p>";
      ?>  
</div>
</div>

<div class="row">
  <div class="col-12 col-sm-3">
<?php
     echo '<img src="'.$result['articles'][9]['urlToImage'].'">';
      ?> 

</div>
<div class="col-12 col-sm-9">
<?php
     echo "<p style='color:black;font-family:Times New Roman;font-size:20px;'>" .$result['articles'][9]['content'] . "</p>";
      ?>  
</div>

      </div>





      
      <div class="row">
      <div class=" col-12">
      <?php
     
     echo "<p style='color:red;font-family:Times New Roman;font-size:20px'>" .$result['articles'][10]['title'] . "</p>";
      ?>  
</div>
</div>

<div class="row">
  <div class="col-12 col-sm-3">
<?php
     echo '<img src="'.$result['articles'][10]['urlToImage'].'">';
      ?> 

</div>
<div class="col-12 col-sm-9">
<?php
     echo "<p style='color:black;font-family:Times New Roman;font-size:20px;'>" .$result['articles'][10]['content'] . "</p>";
      ?>  
</div>

      </div>





      
      <div class="row">
      <div class=" col-12">
      <?php
     
     echo "<p style='color:red;font-family:Times New Roman;font-size:20px'>" .$result['articles'][11]['title'] . "</p>";
      ?>  
</div>
</div>

<div class="row">
  <div class="col-12 col-sm-3">
<?php
     echo '<img src="'.$result['articles'][11]['urlToImage'].'">';
      ?> 

</div>
<div class="col-12 col-sm-9">
<?php
     echo "<p style='color:black;font-family:Times New Roman;font-size:20px;'>" .$result['articles'][11]['content'] . "</p>";
      ?>  
</div>

      </div>






      
      <div class="row">
      <div class=" col-12">
      <?php
     
     echo "<p style='color:red;font-family:Times New Roman;font-size:20px'>" .$result['articles'][12]['title'] . "</p>";
      ?>  
</div>
</div>

<div class="row">
  <div class="col-12 col-sm-3">
<?php
     echo '<img src="'.$result['articles'][12]['urlToImage'].'">';
      ?> 

</div>
<div class="col-12 col-sm-9">
<?php
     echo "<p style='color:black;font-family:Times New Roman;font-size:20px;'>" .$result['articles'][12]['content'] . "</p>";
      ?>  
</div>

      </div>






      
      <div class="row">
      <div class=" col-12">
      <?php
     
     echo "<p style='color:red;font-family:Times New Roman;font-size:20px'>" .$result['articles'][13]['title'] . "</p>";
      ?>  
</div>
</div>

<div class="row">
  <div class="col-12 col-sm-3">
<?php
     echo '<img src="'.$result['articles'][13]['urlToImage'].'">';
      ?> 

</div>
<div class="col-12 col-sm-9">
<?php
     echo "<p style='color:black;font-family:Times New Roman;font-size:20px;'>" .$result['articles'][13]['content'] . "</p>";
      ?>  
</div>

      </div>







      
      <div class="row">
      <div class=" col-12">
      <?php
     
     echo "<p style='color:red;font-family:Times New Roman;font-size:20px'>" .$result['articles'][14]['title'] . "</p>";
      ?>  
</div>
</div>

<div class="row">
  <div class="col-12 col-sm-3">
<?php
     echo '<img src="'.$result['articles'][14]['urlToImage'].'">';
      ?> 

</div>
<div class="col-12 col-sm-9">
<?php
     echo "<p style='color:black;font-family:Times New Roman;font-size:20px;'>" .$result['articles'][14]['content'] . "</p>";
      ?>  
</div>

      </div>





      
      <div class="row">
      <div class=" col-12">
      <?php
     
     echo "<p style='color:red;font-family:Times New Roman;font-size:20px'>" .$result['articles'][15]['title'] . "</p>";
      ?>  
</div>
</div>

<div class="row">
  <div class="col-12 col-sm-3">
<?php
     echo '<img src="'.$result['articles'][15]['urlToImage'].'">';
      ?> 

</div>
<div class="col-12 col-sm-9">
<?php
     echo "<p style='color:black;font-family:Times New Roman;font-size:20px;'>" .$result['articles'][15]['content'] . "</p>";
      ?>  
</div>

      </div>




      
      <div class="row">
      <div class=" col-12">
      <?php
     
     echo "<p style='color:red;font-family:Times New Roman;font-size:20px'>" .$result['articles'][16]['title'] . "</p>";
      ?>  
</div>
</div>

<div class="row">
  <div class="col-12 col-sm-3">
<?php
     echo '<img src="'.$result['articles'][16]['urlToImage'].'">';
      ?> 

</div>
<div class="col-12 col-sm-9">
<?php
     echo "<p style='color:black;font-family:Times New Roman;font-size:20px;'>" .$result['articles'][16]['content'] . "</p>";
      ?>  
</div>

      </div>




      
      <div class="row">
      <div class=" col-12">
      <?php
     
     echo "<p style='color:red;font-family:Times New Roman;font-size:20px'>" .$result['articles'][17]['title'] . "</p>";
      ?>  
</div>
</div>

<div class="row">
  <div class="col-12 col-sm-3">
<?php
     echo '<img src="'.$result['articles'][17]['urlToImage'].'">';
      ?> 

</div>
<div class="col-12 col-sm-9">
<?php
     echo "<p style='color:black;font-family:Times New Roman;font-size:20px;'>" .$result['articles'][17]['content'] . "</p>";
      ?>  
</div>

      </div>





      
      <div class="row">
      <div class=" col-12">
      <?php
     
     echo "<p style='color:red;font-family:Times New Roman;font-size:20px'>" .$result['articles'][18]['title'] . "</p>";
      ?>  
</div>
</div>

<div class="row">
  <div class="col-12 col-sm-3">
<?php
     echo '<img src="'.$result['articles'][18]['urlToImage'].'">';
      ?> 

</div>
<div class="col-12 col-sm-9">
<?php
     echo "<p style='color:black;font-family:Times New Roman;font-size:20px;'>" .$result['articles'][18]['content'] . "</p>";
      ?>  
</div>

      </div>



      
      <div class="row">
      <div class=" col-12">
      <?php
     
     echo "<p style='color:red;font-family:Times New Roman;font-size:20px'>" .$result['articles'][19]['title'] . "</p>";
      ?>  
</div>
</div>

<div class="row">
  <div class="col-12 col-sm-3">
<?php
     echo '<img src="'.$result['articles'][19]['urlToImage'].'">';
      ?> 

</div>
<div class="col-12 col-sm-9">
<?php
     echo "<p style='color:black;font-family:Times New Roman;font-size:20px;'>" .$result['articles'][19]['content'] . "</p>";
      ?>  
</div>

      </div>




        
   </div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

   </body>
</html>
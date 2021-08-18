<?php
include ('validate.php'); 
?>

<!DOCTYPE html>
<html>
    <title>stage 2 task</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend.css">
    <link rel="stylesheet" href="animate/animate.css">
<link href="index.php"/>


    <body>
        <div class="section1">
                  
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="#">TWW <sub>timi world wide</sub> </a>
                <div class="navbar" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item ">
                      <a class="nav-link bg-light" href="#"><img src="img/ZURI.svg" alt="ZURI"width="200px" height="50px"></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><img src="img/HNG.png" alt="HNG"width="200px" height="50px"> </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link bg-light" href="#"><img src="img/I4G.png" alt="I4G" width="200px" height="50px"> </a>
                    </li>
                  </ul>
                </div>
              </nav>
                        
        </div>
        <p><br></p>
        <div class="section2">
        <div class="row">

  <div class="column">
    <div class="card">
    <img class="card-img-top" src="img/IMG_1017.jpg" alt="timi ajayi">
              
                <h5 class="card-title">ajayi oluwatimilehin sunday</h5>
               
    </div>
  </div>
  <div class="column">
    <div class="card">
  <p>
    Welcome <?php echo $_POST["name"]; ?><br>
With email: <?php echo $_POST["email"]; ?>
  </p>          
    </div>
  </div>
  <div class="column">
    <div class="card">
    <h5 class="card-title">Backend stage 2 Task</h5>
    <p class="card-text">click  below to access my resume (to be updated)</p>
    <a href="#" class="btn btn-primary" onclick="window.open('resume.pdf', '_blank', 'fullscreen=yes'); return false;">My resume</a>

    </div>
  </div>
</div>
        </div>              
       
<p><br></p>

<div class="section3">
<div class="card text-center">
    <div class="card-body">
    
  </div>
  </div>
       </div>
<div class="footer">

<p>@timiajayi 
  
</p>
</div>


        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
  
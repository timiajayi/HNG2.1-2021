<?php 
include('validate.php'); 
?>
<!DOCTYPE html>
<html>
    <title>stage 2 task</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend.css">
    <link rel="stylesheet" href="animate/animate.css">



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
  
                <h5 class="card-title">i would love to be a part of your team</h5>
                <p class="card-text">i am a Backend developer</p>
               
    </div>
  </div>
  <div class="column">
    <div class="card">
    <h5 class="card-title">Backend stage 2 Task</h5>
    <p class="card-text">fill the formbelow to access my resume (to be updated)</p>

    
   
    <form method="post" action="form.php" >  
  Name: 
  <input type="text" name="name" placeholder="name">
  <span class="error"><?php echo $nameErr;?></span>
  <br><br>
  E-mail: 
  <input type="text" name="email" placeholder="email">
  <span class="error"><?php echo $emailErr;?></span>
  <br><br>
  Website:
   <input type="text" name="website" placeholder="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: 
  <textarea name="comment" placeholder="comments" rows="5" ><?php echo $comment;?></textarea>
  <br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
if (isset($_POST['submit']) && $error == '') {
echo "<p class='success'>Form has been submitted successfully.</p>"; 

$name=$_POST['name']; 
$email=$_POST['email']; 
$website=$_POST['website']; 
$comments=$_POST['comments']; 

$to="timiajayi2001@gmail.com";
$subject="Requested your resume";
$from="stage2 HNG backend";

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers  .= "From: $from\r\n"; 
@mail($to, $subject, $message, $headers);
echo '<meta http-equiv="refresh" content="0;URL=form.php" />';
}
?> 
</body>
</html>


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
  
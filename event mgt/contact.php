<!DOCTYPE html>
<html lang="en">
<head>
  <title>spark</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="style.css">
 <link rel="shortcut icon" href="s.jpg" />

  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;javascript:void(0)
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
.footer
{

  height: 50px;
  background-color: black;
   color: white;

}
.footer h6
{
  line-height: 50px;
}


</style>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top ">
  <div class="container">
    <a href="" navbar-brand text-warming font-weight-bold class="n">Spark*</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center" id="collapsenavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="index.php" class="nav-link text-white">Home</a>
        </li>
        <li class="nav-item">
          <a href="about.php" class="nav-link text-white">About us</a>
        </li>
        <li class="nav-item">
          <a href="g.php" class="nav-link text-white">Garelly</a>
        </li>
        <li class="nav-item">
          <a href="contact.php" class="nav-link text-white">Contact us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="container" style="background-image: url(a.jpg);  padding: 50px;">
<div class="container-fluid">
  <h1 style="font-weight: bold; text-align: center; color:white;">Contact Form</h1>
 
  
  
    <div class="row"style="background-color:lavender; border: 2px solid red; border-top-right-radius: 25px; " >
    <div class="col-sm-4"style=" " >
<p></p>
  <h5 style="font-weight: bold;">Swing by for a cup of coffee, or leave us a message:.</h5>
<h6>Adress : sector B 124 Mp nagar, Bhopal</h6>
<h6>Phone : 869503480</h6>
<h6>Email :dddd123@gmail.com</h6></div>


    
    <div class="col-sm-8" >


<div class="container">
  <form action="userinfo.php" method="POST">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="fname" placeholder="Your name.." required="">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" placeholder="Your last name.." required="">

    <label for="mobilt">mobile</label>
     <input type="text" id="mobile" name="mobile" placeholder="Number.."  required="">

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required=""></textarea>

    <input type="submit" value="Submit">
  </form>
</div>


    </div>

  </div>
    
</div>
 </div>



 <footer class="footer">
  <h6 class="text-center">CopyRight@wwwwww</h6>
</footer>
</body>
</html>

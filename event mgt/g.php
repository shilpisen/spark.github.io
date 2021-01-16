<!DOCTYPE html>
<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="shortcut icon" href="s.jpg" />
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}
</style>
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
          <a href="Garelly.php" class="nav-link text-white">Garelly</a>
        </li>
        <li class="nav-item">
          <a href="contact.php" class="nav-link text-white">Contact us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Header -->
<div class="container">
<div class="header">

  <p>“The best thing about a picture is that it never changes, even when the people in it do.”</p>
</div>

<!-- Photo Grid -->
<div class="row"> 
  <div class="column">
    <img src="w.jpg" style="width:100%">
    <img src="w2.jpg" style="width:100%">
    <img src="w3.jpg" style="width:100%">
    <img src="b1.jpg" style="width:100%">
    <img src="b2.jpg" style="width:100%">
    <img src="b3.jpg" style="width:100%">
    
  </div>
  <div class="column">
    <img src="h1.jpg" style="width:100%">
    <img src="h2.jpg" style="width:100%">
    <img src="h3.jpg" style="width:100%">
    <img src="g1.jpg" style="width:100%">
    <img src="g2.jpg" style="width:100%">
    <img src="g3.jpg" style="width:100%">
  </div>  
  <div class="column">
    <img src="d1.jpg" style="width:100%">
    <img src="d2.jpg" style="width:100%">
    <img src="f1.jpg" style="width:100%">
    <img src="f2.jpg" style="width:100%">
    <img src="p1.jpg" style="width:100%">
    <img src="argyle.jpg" style="width:100%">
    <img src="2.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="c1.jpg" style="width:100%">
    <img src="c2.jpg" style="width:100%">
    <img src="c3.jpg" style="width:100%">
    <img src="o1.jpg" style="width:100%">
    <img src="o2.jpg" style="width:100%">
    <img src="o3.jpg" style="width:100%">
  </div>
</div>
</div>



<footer class="footer">
  <h6 class="text-center">CopyRight@wwwwww</h6>
</footer>

</body>
</html>

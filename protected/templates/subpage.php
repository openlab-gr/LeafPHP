<!DOCTYPE html>
<html lang="en">
<head>
  <title>LeafPHP Simple Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

<div class="p-5 bg-success text-white text-center">
  <h1>LeafPHP Demo Page</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">

        <?=self::$tag['menu'];?>
        
    </ul>
  </div>
</nav>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h2>About Me</h2>
       
      <img src="protected/templates/imgs/profile_img.jpg" class="img-fluid p-2" width="60%">

      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">

        <?=self::$tag['doc'];?>

    </div>
  </div>
</div>

<div class="mt-5 p-4 bg-dark text-white text-center">
<p>This project made by LeafPHP Framework</p>
</div>

</body>
</html>





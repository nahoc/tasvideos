<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
  <title>TASVideos</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <div id="top"></div>
  <!-- Require -->
  <?php require_once "includes/functions.php"; ?>
  <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
      aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <a class="navbar-brand" href="#">TASVideos</a>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Movies</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="#">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Forums</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Desktop site</a>
          </li>
        <!--<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>-->
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <div class="content">
    <span href="#" id="pub-switch" class="btn btn-default tab">Latest publications</span>
    <span href="#" id="sub-switch" class="btn btn-default tab tab-2">Latest submissions</span>

    <div class="container">

      <div class="col-xs-12">
        <div class="latest-pub">
          <br/>
          <h1>Latest publications</h1>
          <hr/>
          <?php getFeedPub("http://tasvideos.org/publications.rss"); ?>
        </div>
        <div class="latest-sub">
          <br/>
          <h1>Latest submissions</h1>
          <hr/>
          <?php getFeedSub("http://tasvideos.org/submissions.rss"); ?>
        </div>
      </div>

    </div>
    <!-- /.container -->

  </div>
  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
    crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>
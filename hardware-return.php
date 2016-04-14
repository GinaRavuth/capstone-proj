<!DOCTYPE html>
<html>
<head>
<title>Ordino - Hardware Return</title>
 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/local.css">
  <link rel="stylesheet" href="css/bootstrap.css">
 
  <link href='http://fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open Sans:400,300,700' rel='stylesheet' type='text/css'>
	<link href="https://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css" rel="stylesheet" type='text/css'>

  <style>
  </style>
</head>
<body >

  <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle toggle-button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
					<a class="navbar-brand" href="#">
					<h1 id="ordino">Ordino</h1>
					</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html" class="active">Home</a>
                    </li>
                    <li>
                        <a href="hardware.php">Hardware</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="returns.php">Returns</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container" style="margin-top: 120px;">
  <div class="row">
    <div class="col-md-12">
    <h2 class="bold">Item Name</h2>
    <p>Description
</p><br />
</div>
</div>
<h2 class="bold">Return Hardware</h2>
<p>Please fill out the form to request hardware return.</p><br>
<form class="form-horizontal" method="post" action="splash.php">
  <div class="form-group">
    <label for="name" class="col-sm-1 control-label text-left">Name</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="name" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label for="eagleid" class="col-sm-1 control-label text-left">Eagle ID</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="eagleid" placeholder="Eagle ID">
    </div>
  </div>
  <div class="form-group">
    <label for="date" class="col-sm-1 control-label text-left">Date for Return</label>
    <div class="col-sm-7">
      <input type="date" class="form-control" id="date">
    </div>
  </div>
  <div class="form-group">
  <label for="message" class="col-sm-1 control-label text-left">Problems</label>
  <div class="col-sm-7">
  <textarea class="form-control" rows="5" id="message" placeholder="Please let us know if you had any problems with this hardware."></textarea>
  </div>
  </div>

  <div class="form-group">
    <div class="col-sm-8">
      <button type="submit" class="btn btn-default pull-right" name="Return" id="submit">Return</button>
    </div>
  </div>
</form>
</div>
<!--scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  
  <!--end scripts -->
</body>
</html>
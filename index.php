<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Picture-Taking Simulator</title>

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
    <!-- Custom CSS for app -->
    <link rel="stylesheet" href="css/app.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
          <h1>Picture-Taking Simulator</h1>
        </div><!--/col-->
      </div><!--/row-->
      <div class="row">
        <div class="col-xs-12">
          <div class="panel panel-default">
            <div class="panel-body">
              <img src="http://placekitten.com/g/1024/576" class="img-responsive img-rounded center-block" id="current-view" />
            </div><!--/panel-body-->
          </div><!--/panel-->
        </div><!--/col-->
      </div><!--/row-->
      <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
          <label>Photos remaining:</label>
          <div class="progress">
            <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
              Unlimited
            </div><!--/progress-bar-->
          </div><!--/progress-->
        </div><!--/col-->
      </div><!--/row-->
      <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-2">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Camera Mode:</h3>
            </div>
            <div class="panel-body">
              <form role="form">
                <div class="radio">
                  <label>
                    <input type="radio" name="cameraMode" id="normal" value="normal" checked>
                    Normal
                  </label>
                </div><!--/radio-->
                <div class="radio">
                  <label>
                    <input type="radio" name="cameraMode" id="selfie" value="selfie">
                    Selfie
                  </label>
                </div><!--/radio-->
              </form>
            </div><!--/panel-body-->
          </div><!--/panel-->
        </div><!--/col-->
        <div class="col-xs-12 col-md-4">
          <button type="button" class="btn btn-block btn-success">I'm Done</button>
        </div><!--/col-->
      </div><!--/row-->
    </div><!--/container-fluid-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
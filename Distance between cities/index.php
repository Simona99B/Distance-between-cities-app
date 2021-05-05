<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="styling.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">

    <title>Distance between Cities App</title>
  </head>
  <body>
    <div class="jumbotron">
      <div class="container-fluid">
        <h1>Distance between cities App.</h1>
        <p>Our app will help you calculate travelling distances.</p>
        <form class="form-horizontal">
          <div class="form-group">
                <label for="from" class="col-xs-2 control-label">From:</label>
                <div class="col-xs-10">
                    <input type="text" id="from" placeholder="Origin" class="form-control">
                </div>
          </div>
            <div class="form-group">
                <label for="to" class="col-xs-2 control-label">To:</label>
                <div class="col-xs-10">
                    <input type="text" id="to" placeholder="Destination" class="form-control">
                </div>
          </div>
        </form>
          
        <div class="col-xs-offset-2 col-xs-10">
          <button class="btn btn-info btn-lg" onclick="calcRoute();" >Submit</button>
        </div>
      </div>
      <div class="container-fluid">
        <div id="googleMap">
          
        </div>
        <div id="output">
          
        </div>
      </div>
    </div>

    <!--Google map-->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAi92xGWeZLzcLgS2GOpOGHRk_caGz_48&libraries=places"></script>   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script> 
    <script src="javascript.js"></script>
  </body>
</html>
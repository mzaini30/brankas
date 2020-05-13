<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="/lib/bootstrap/css/bootstrap.min.css">
    <title>Brankas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
       * {
  word-wrap: break-word;
}
.sembunyi {
  display: none;
}

    </style>
  </head>
  <body>
    <div class="container">
      <center>
        <h1>Brankas</h1>
        <hr>
      </center>
      <div class="row"> 
        <div class="col-sm-9"></div>
        <div class="col-sm-3">
          <div class="panel panel-success">
            <div class="panel-heading">Upload</div>
            <div class="panel-body">
              <form class="form-upload">
                <div class="form-group">
                  <label>File</label>
                  <input class="file" type="file">
                </div>
                <div class="form-group">
                  <label>Batasan download</label>
                  <input class="form-control jatah" type="number" value="1">
                </div>
                <div class="from-group">
                  <input class="btn btn-default" type="submit" value="Upload">
                </div>
              </form>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">Menu</div>
            <div class="list-group"><a class="list-group-item" href="/logout.php">Logout</a></div>
          </div>
        </div>
      </div>
    </div>
    <script src="/lib/jquery/jquery.min.js"></script>
    <script src="/lib/bootstrap/js/bootstrap.min.js"></script>
    <script>

    </script>
  </body>
</html>
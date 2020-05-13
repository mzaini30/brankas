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
        <h1>Login</h1>
        <hr>
      </center>
      <div class="alert alert-warning info sembunyi">Username dan password salah!</div>
      <form class="login"> 
        <div class="form-group">
          <label>Username</label>
          <input class="form-control nama">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input class="form-control password" type="password">
        </div>
        <div class="form-group">
          <input class="btn btn-default" type="submit" value="Login">
        </div>
      </form>
    </div>
    <script src="/lib/jquery/jquery.min.js"></script>
    <script src="/lib/bootstrap/js/bootstrap.min.js"></script>
    <script>$(".login").on("submit", function(x) {
  x.preventDefault();
  return $.get("/api/cek-password.php?username=" + ($(".nama").val()) + "&password=" + ($(".password").val()), function(data) {
    if (data === 0) {
      return $(".info").removeClass("sembunyi");
    } else {
      return location.href = "/login/proses.php?username=" + ($(".nama").val()) + "&password=" + ($(".password").val());
    }
  });
});

    </script>
  </body>
</html>
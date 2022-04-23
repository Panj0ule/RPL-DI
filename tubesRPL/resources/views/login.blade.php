<!DOCTYPE html>
<html>
  <head> 
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&family=Poppins:wght@400;@600&display=swap" rel="stylesheet">
  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"></script>
    
    <style>
      .error {
        color: red
      }
    </style>

    <script>
      $(function() {
      // handle submit event of form
        $(document).on("submit", "#handleAjax", function() {
          var e = this;
          // change login button text before ajax
          $(this).find("[type='submit']").html("LOGIN...");

          $.post($(this).attr('action'), $(this).serialize(), function(data) {

            $(e).find("[type='submit']").html("LOGIN");
            if (data.status) { // If success then redirect to login url
              window.location = data.redirect_location;
            }
          }).fail(function(response) {
              // handle error and show in html
            $(e).find("[type='submit']").html("LOGIN");
            $(".alert").remove();
            var erroJson = JSON.parse(response.responseText);
            for (var err in erroJson) {
              for (var errstr of erroJson[err])
                $("#errors-list").append("<div class='alert alert-danger'>" + errstr + "</div>");
            }
          });
          return false;
        });
      });
    </script>
  </head>

  <body>
    <img src="assets/login/top-left_corner.svg" style="float: left;position: fixed; width: 223px; height: 212px; top: 0px;">
    <div class="paraLog">
      <h2 class="LogBuna">
        <span class="login-to">Login to</span>
        <span class="Buna">Buna</span>
      </h2>
      <p class="belowLog">
        <span class="basicpara">If you don't have an account</span>
        <br>
        <span class="basicpara">You can</span>
        <a href="/register" class="registerlink">Register here</a>
        <span>!</span>
      </p>
    </div>

    <div class="logform">
      <h1 class="loginabove">LOGIN</h1>
      <form method="post" id="handleAjax" action="{{url('do-login')}}" name="postform">
        @csrf
        <div class="form-group">
          <input type="text" name="email" value="{{old('email')}}" class="form-control" placeholder="Enter email or username" required/>
        </div>
        <div class="form-group">
          <input type="password" name="password" class="form-control" placeholder="password" required/>
        </div>
        <div>
          <a href="/register" class="forgotpsw">Forgot Password?</a>
        </div>
        <div class="form-group">
          <input type="submit" name="subLog" id="subLog" value="Login">
        </div>
      </form>
    </div>
    
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

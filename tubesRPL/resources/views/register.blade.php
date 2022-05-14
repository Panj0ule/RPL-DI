<!DOCTYPE html>
<html>
  <head> 
    <title>Register Page</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&family=Poppins:wght@600&display=swap" rel="stylesheet">
    
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
    <img src="assets/reg/top-right_corner.svg" style="float: right; width: 198px; height: 214px; top:0px; position: static;">
    <img src="assets/reg/bot-left_corner.svg" style="float: left;position: fixed; width: 269px; height: 249px; bottom: 0px;">
      <div class="paraReg">
        <h2 class="RegBuna">
          <span class="regis-to">Register to</span>
          <span class="Buna">Buna</span>
        </h2>
        <p class="belowReg">
          <span class="baris1">If you alredy have an account</span>
          <br>
          <span class="baris2">You can</span>
          <a href="/login" class="loginlink">Login here</a>
          <span>!</span>
        </p>
      </div>

      <div class="regform">
        <h1 class="regisabove">REGISTER</h1>
        <form method="post" id="handleRegisterAjax" action="{{url('do-register')}}" name="postform">
          @csrf
          <div class="form-group">
            <input type="text" name="email" value="{{old('email')}}" class="form-control" placeholder="Email" required/>
          </div>
          <div class="form-group">
            <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Enter Your Fullname" required/>
          </div>
          <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Create Username" required/>
          </div>
          <div class="form-group">
            <input type="text" name="phonenumb" class="form-control" placeholder="Enter Phone Number" required/>
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Enter Password" required/>
          </div>
          <div class="form-group">
            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required/>
          </div>
          <div class="form-group">
            <input type="submit" name="subReg" id="subReg" value="Register">
          </div>
        </form>
      </div>

      <script>
        $(function(){
          $(document).on("submit","#handleRegisterAjax",function(){
            var e=this;
        
            $(this).find("[type='submit']").html("REGISTER...");
            $.post($(this).attr('action'),$(this).serialize(),function(data){
              $(e).find("[type='submit']").html("REGISTER");
              if(data.status){
                alert(data.msg)
                window.location=data.redirect_location;
              }
            }).fail(function(response) {
              $(e).find("[type='submit']").html("LOGIN");
              $(".alert").remove();
              var erroJson = JSON.parse(response.responseText);
              for (var err in erroJson) {
                for (var errstr of erroJson[err])
                $("[name='" + err + "']").after("<div class='alert alert-danger'>" + errstr + "</div>");
              }
            });
      
            return false;
          });
        });
      </script>
      
      <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
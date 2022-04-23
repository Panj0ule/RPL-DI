<!DOCTYPE html>
<html>
    <head> 
        <title>Welcome Page</title>
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&family=Poppins:wght@600&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="nav-bar-menu">
            <ul class = "menu-list">
                <li><a href="/"><img src="assets/profile.svg" name="profile" style="width: 30px; height: 30px;"></a></li>
                <li><a >Contact Us</a></li>
                <li><a >About Us</a></li>
                <li><a href="/">Home</a></li>

                <div class="d-flex align-items-center" style="margin: 15px">
                    @if(\Auth::check())
                      <a style="margin-right: 10px; color:white">You are logged in as  : {{\Auth::user()->email}}</a>
                      <button type="button" class="btn btn-link px-3 me-2">
                        <a href="{{url('logout')}}">Logout</a>
                      </button>
                    @else
                      <a class='error' style="margin-right: 10px"> You are not logged in  </a>
                      
                      <button type="button" class="btn btn-link px-3 me-2">
                        <a href="{{url('login')}}">Login</a>
                      </button>
                    @endif
                </div>
            </ul>   
        </div>

        <div class="welcomeline">
              <p>
                  <span>Hello,</span>
                  <br>
                  <span>Welcome to</span>
                  <span class="Buna1">Buna</span>
                  <span>!</span>
              </p>
              <form action="">
                  <a href="/register" style="text-decoration:none;">
                    <input type="button" class="btn" name="butreg" id="butreg" value="Register">
                  </a>
                  <a href="/login" style="text-decoration:none;">
                    <input type="button" class="btn" name="butlog" id="butlog" value="Login"> 
                  </a>
              </form>
        </div>
        <img src="assets/moms.svg" style="float: right; width: 362px; height: 419; margin-right: 200px; margin-top: 50px;">
    </body>
</html>

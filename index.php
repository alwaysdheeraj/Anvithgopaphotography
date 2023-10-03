<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="login.css"/>
    <link rel="icon"  href="images/logo1.png">
    <!-- <link rel="stylesheet" href="style.css"/> -->
    <title>Sign in & Sign up Form</title>
  </head>
  <body>

    <!-- <section class="header"> -->

      <!-- <section class="sub-header1" style="background:#44eb76; margin-bottom: 1px;">
        <nav>
          <a href="index.html"><img src="images/logo1.png" alt="Loading"></a>
          <div class="nav-links" id="navLinks">
             <i class="fa fa-times" onclick="hidemenu()"></i>
             <ul>
               <li class="adidu"><a href="home.php" >HOME</a></li>
               <li class="adidu"><a href="gallary.php">GALLARY</a></li>
               <li class="adidu"><a href="contact.php">CONTACT</a></li>
               <li class="adidu"><a href="about.php">ABOUT-US</a></li>
               <li class="logout"><a href="index.php">LOGOUT</a></li>
            </ul>
          </div>
          <i class="fa fa-bars" onclick="showmenu()"></i>
       </nav> -->
       
        </section>
        
    <div class="container">
      
        
      <div class="forms-container">
        <div class="signin-signup">
          <form action="connect.php" method="POST" class="sign-in-form">
         <div style="display:flex;padding-left:6rem"> <img  width=20% src="images/logo1.png" alt="Loading">
<h2 style="padding-top:1rem;">Anvithgopa Photography</h2></div>
        
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Email" name="email" id="username" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" id="password" required/>
            </div>
            <input type="submit" name="action" value="signin" class="btn solid"  />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="connect.php" method="POST" class="sign-up-form">
          <div style="display:flex;padding-left:6rem"> <img  width=20% src="images/logo1.png" alt="Loading">
<h2 style="padding-top:1rem;">Anvithgopa Photography</h2></div>
            <h2 class="title">Sign up</h2>
            <div class="input-field input-field1">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username" id="username" required />
            </div>
            <div class="input-field input-field1">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" id="email" required/>
            </div>
            <div class="input-field input-field1">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" id="password" required/>
            </div>
            <input type="submit" name="action" class="btn" value="signup" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            
            <h3 style="color: black;">New here ?</h3>
            <!-- <p style="font-style:italic; color: black;">
        
            </p> -->
            <button class="btn " id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <!-- <h3 style="color: black;">One of us ?</h3> -->
            <p style="color: black; padding-top: 40px;">
             ALREADY HAVE ACCOUNT.... 
            </p>
            <button class="btn" id="sign-in-btn" >
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    
    <script src="app.js"></script>
   
  </body>
</html>

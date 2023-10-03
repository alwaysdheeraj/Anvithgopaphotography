 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <title>Anvithgopa Photography</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon"  href="images/logo1.png">
 </head>
 <body>
   
    <section class="sub-header">
      <nav>
         <a href="index.html"><img src="images/logo1.png" alt="Loading"></a>
         <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hidemenu()"></i>
            <ul>
            <ul>
               <li class="adidu"><a href="home.php" >HOME</a></li>
               <li class="adidu"><a href="gallary.php">GALLERY</a></li>
               <li class="adidu"><a href="contact.php">CONTACT</a></li>
               <!-- <li class="adidu"><a href="about.php">ABOUT-US</a></li> -->
               <li class="logout"><a href="index.php">LOGOUT</a></li>
            </ul>
                </div>
            <i class="fa fa-bars" onclick="showmenu()"></i>
      </nav>
        <!-- <h1 style="text-align: center;">ABOUT US</h1> -->
    </section>

<style>

.contact-col input {
   margin: 20px;
}
.contact-col textarea {
   margin: 20px;
}
.contact-col button {
   margin-left: 35%;
   margin-bottom: 3rem;
}


</style>

    <section class="abt ">
      <div class="row">
          <div class="abt-col">
               <h1>ANVITHGOPA</h1>
               <p style="font-style:italic">I'm a hobbyist photographer, who is always ready to serve Personal,Small Event,Birthday celebration,Instagram
Modelling Photography in any location and accept any theme from customers.As a dedicated engineer who has a passion for capturing moments through the lens,This part-time job  allows me to explore a different realm of creativity, one that offers a refreshing balance to the structured world of engineering. Through photography,i like to not only captures images but also emotions, stories, and perspectives, showcasing the beauty that exists in both the engineered and natural worlds.</p>
               <a href="https://instagram.com/anvithgopa_photography?igshid=MzRlODBiNWFlZA==" target=blank  class="btn">EXPLORE</a><br><br><br>
          
          <div class="contact-col" >



          <form id="form">
          <fieldset style="border:solid 2px black;">
          <legend style="border:solid 2px black;margin-left:12rem">EMAIL ME YOUR QUERY</legend>
      <input type="text" name="to_name" id="to_name" placeholder="ENTER YOUR NAME..." required>
        <input type="text" name="email_id" id="email_id"  placeholder="EMAIL ADDRESS..." required>
            <!-- <input type="text" name="service" placeholder="SERVICE REQUIRED.." required> -->
            <textarea type="text" name="message" id="message"  rows="1"name="message" placeholder="MESSAGE HERE...." required></textarea>
            <button type="submmit" id="button" class="btn" value="Send Email">SEND MESSAGE</button>    
         </fieldset>
          </form>
          </div>
          
          </div>

          <div class="abt-col">
            <img src="images/goppa.jpg" style="width: 100%;  border-radius: 50px;">

          </div>

           
      </div>
      <script type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
          
          <script type="text/javascript">
            emailjs.init('85CtRN5GLzJ6RPJs2')
          </script>


    </section>


    <footer>
        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>

        </div>


        <ul class="sociol_icon">
            <li><a href="https://www.facebook.com/AN.Anvithgopa"><ion-icon name="logo-facebook"  target="_blank"></ion-icon></a></li> 
            <li><a href="https://twitter.com/anvithgopa"><ion-icon name="logo-twitter"  target="_blank"></ion-icon></a></li>
            <li><a href="https://instagram.com/anvithgopa_photography?igshid=MzRlODBiNWFlZA=="  target="_blank"><ion-icon name="logo-instagram"></ion-icon></a></li>
            <li><a href="https://www.youtube.com/anvithgopa"><ion-icon name="logo-youtube"  target="_blank"></ion-icon></a></li>
        </ul>

        <ul class="menu">
            <li><a href="home.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="gallary.php">GALLERY</a></li>
            <li><a href="contact.php">CONTACT</a></li>
        </ul>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <a href="https://www.instagram.com/alwaysdheeraj/" target="_blank"style="text-decoration:none"> All Rights Reserved | @alwaysdheeraj</a>

    </footer>


    <script>

var navLinks =document.getElementById("navLinks");

 function showmenu(){
   navLinks.style.right ="0";
 }
 function hidemenu(){
   navLinks.style.right ="-200px";
 }




</script>
   











      <script>
const btn = document.getElementById('button');

document.getElementById('form')
 .addEventListener('submit', function(event) {
   event.preventDefault();

   btn.value = 'Sending...';

   const serviceID = 'default_service';
   const templateID = 'template_d3ut1xc';

   emailjs.sendForm(serviceID, templateID, this)
    .then(() => {
      btn.value = 'Send Email';
      alert('Sent!');
    }, (err) => {
      btn.value = 'Send Email';
      alert(JSON.stringify(err));
    });
});

      </script>
 </body>
 </html>
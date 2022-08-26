

  
<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h3 class="header center white-text text-lighten-2">Subscribe Our Newsletter <br> & Get Updates.</h3>
        <div class="row center">
         <div class="col l12 s12 center-align">
            <div class="input-field">
              <input type="email" placeholder="Enter Email Address" name="email">
          </div>
         </div>
        <div class="row center">
          <a href="Subscribe.php" id="download-button" class="btn-large waves-effect waves-light #2196f3 blue">Subscribe</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax">
       <video loop autoplay  style=" top: 0 ;width: 100%;height: 100%;object-fit: cover;position: relative;">
           <source src="vd/e-mail-icons-move-in-perspective-view-on-dark-grid-background-internet-message-concept_s7esa7lke__162b80d063af3020b20efdf4326ab3fb__P360.mp4" type="">
       </video>
    </div>
  </div>
</div>
  <footer class="page-footer #263238 blue-grey darken-4">
    <div class="container">
      <div class="row ">
        <div class="col l6 s12 center-align">
          <h5 class="blue-text">Gallery</h5>
          <div class="row">
          <div class="col s4 m4 l4 offset-l4 offset-s4">
           <hr  style="background:green;height:1px; border-radius:3px;">
          </div>
       </div>
           <div class="row">
            <div class="col l4 s4">
              <img src="img/gal1.jpg" class="materialboxed"  width="100%" height="auto">
            </div>
            <div class="col l4 s4">
              <img src="img/gal2.jpg" class="materialboxed"  width="100%" height="auto">
            </div>
            <div class="col l4 s4">
              <img src="img/gal3.jpg" class="materialboxed"  width="100%" height="auto">
            </div>
             
           </div>  
           <div class="row">
             <div class="col l4 s4"> 
              <img src="img/gal4.jpg" class="materialboxed"  width="100%" height="auto">
            </div>
            <div class="col l4 s4">
              <img src="img/gal5.jpg" class="materialboxed"  width="100%" height="auto">
            </div>
            <div class="col l4 s4">
              <img src="img/gal7.jpg" class="materialboxed"  width="100%" height="auto">
            </div>
             
           </div>      
   
        </div>
        <div class="col l3 s6  Links">
          <h5 class="blue-text">Useful Links</h5>
          <div class="row">
          <div class="col s5 m4 l4 ">
           <hr  style="background:green;height:1px; border-radius:3px;">
          </div>
       </div>
          <ul class="social">
            <li><span class="material-icons">home</span><a class="white-text" href="index">Home</a></li>
            <li><span class="material-icons">info</span><a class="white-text" href="About">About</a></li>
            <li><span class="material-icons">assignment_ind</span><a class="white-text" href="contact">Contac us</a></li>
            <li><span class="material-icons">question_answer</span><a class="white-text" href="faq">FAQ</a></li>
            <li><span class="material-icons">room_service</span><a class="white-text" href="service">Servics</a></li>
            <li><span class="material-icons">info</span><a class="white-text" href="blog">News</a></li>
           
          </ul>
        </div>
        <div class="col l3 s6  Links">
          <h5 class="blue-text">Connect</h5>
          <div class="row">
          <div class="col s4 m4 l4">
           <hr  style="background:green;height:1px; border-radius:3px;">
          </div>
       </div>
          <ul class="socil-icon">
            <li><i class="fa fa-facebook"></i><a class="white-text" href="https://www.facebook.com/narayan.swain.372019/">Facebook</a></li>
            <li><i class="fa fa-instagram"></i> <a class="white-text" href="https://www.instagram.com/narayan_swayn/">Instgram</a></li>
            <li><i class="fa fa-linkedin"></i><a class="white-text" href="https://www.linkedin.com/in/narayan-swain-0a8290208/">Linkedin</a></li>
            <li><i class="fa fa-google"></i> <a class="white-text" href="#!">Google</a></li>
            <li><i class="fa fa-twitter"></i> <a class="white-text" href="https://twitter.com/NarayanYamato">Twiiter</a></li>
            
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright #2196f3 blue">
      <div class="container">
        Copyright © 2021 Poornima | Designed By
       <a class="brown-text text-lighten-3" href="http://materializecss.com">Niku</a>
      </div>
    </div>
  </footer>




<?php include('top-bottom.php') ?>
  <script src="https://v3.txt.me/livechat/js/wrapper/7e450cc2-1298-4c69-ba6b-39faf1193b80" async></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" ></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript">

   
  $('.materialboxed').materialbox();

        $('.counter').counterUp({
    delay: 10,
    time: 1000
   });
$('.collapsible').collapsible();


$(function() {
    $.ajax({
        url: 'http://code.jquery.com/jquery-latest.js',
        dataType: 'script',
        beforeSend: function(evt) {
            if ( ! $('.preloader').is('.show') ) $('.preloader').addClass('show');
        },
        complete: function(jqXHR, textStatus) {
            // disable either here or at the end
            $('.preloader').removeClass('show');

            // handle error and success
        }
    });
});

$(window).load(function() {
   $('.preloader').fadeOut('slow');
});

  </script>
  


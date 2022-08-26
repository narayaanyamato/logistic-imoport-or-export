

<?php 

include('header.php');
include('db.php');
?>

<div>
  <div class="slider ">
    <ul class="slides">
      <li>
        <img src="img/slider1.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>What is Lorem Ipsum?</h3>
          <h5 class="light grey-text text-lighten-3">Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) </h5>

          <a class="waves-effect waves-light btn-large  btn pulse #2196f3 blue" href="#">More Details</a>
        </div>
      </li>
      <li>
        <img src="img/slider4.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>Why do we use it?</h3>
          <h5 class="light grey-text text-lighten-3">It is a long established fact that a reader will be distracted by the<br> readable content of a page when looking at its layout</h5>

          <a class="waves-effect waves-light btn-large  btn pulse #2196f3 blue" href="#">More Details</a>
        </div>
      </li>
      <li>
        <img src="img/slider2 (2).jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Where does it come from?</h3>
          <h5 class="light grey-text text-lighten-3">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,<br> making it over 2000 years old</h5>

          <a class="waves-effect waves-light btn-large  btn pulse #2196f3 blue" href="#">More Details</a>
        </div>
      </li>
      <li>
        <img src="img/slider3 (2).jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Where can I get some?</h3>
          <h5 class="light grey-text text-lighten-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</h5>

          <a class="waves-effect waves-light btn-large  btn pulse #2196f3 blue" href="#">More Details</a>
        </div>
      </li>
    </ul>
  </div>
  
</div>

<div class="#f5f5f5 grey lighten-4">
   <div class="container #f5f5f5 grey lighten-4" id="services">
    <div class="section">
      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h5 class="red-text">< MAIN SERVICES ></h5>
          <h2>Moving Your Products Across <br> All Borders</h2>
          <a href="#To top">Scroll to top</a>
         
        </div>

        <div class="row">
         <?php 
          
           $sql="SELECT * FROM `services`";
           $res=mysqli_query($con,$sql);
            if(mysqli_num_rows($res)>0)
            {
                while($row=mysqli_fetch_assoc($res))
                {

                  ?>
                   
                   <div class="col l4 m4">

                   <div class="card z-depth-2">
                            <div class="card-image">
                              <span class="card-title red-text"><?php echo $row['title'] ;?></span>
                            </div>
                            <div class="card-content">
                              <p><?php echo $row['short'] ;?></p>
                            </div>
                            <div class="card-action">
                              <a href="ServiceDetails.php?id=<?php echo $row['id'] ?>">MORE DETAILS</a>
                            </div>
                          </div>
                     
                   </div>

                  <?php

                }

            }


         ?>

          
        </div>
      </div>

    </div>
  </div>
</div>


  <div class="card-panel #42a5f5 blue lighten-1" id="TESTIMONIALS">
    <div class="section">
        <h5 class="red-text"> < TESTIMONIALS ></h5>
          <h2 class="white-text">1000+ Happy Customers Said</h2>
         
          

     <div class="owl-carousel owl-theme">
   
      <?php 
       
           $sql="SELECT * FROM `testimonials`";
           $res=mysqli_query($con,$sql);
           if(mysqli_num_rows($res))
           {

               while($row=mysqli_fetch_assoc($res))
               {

                 ?>
                  <div class="item">
                      <div class="card z-depth-3">
                            <img src="admin/images/testimonial/<?php echo $row['img']; ?>" alt="John" style="width:100%">
                            <p class="title"><?php echo $row['title'] ?></p>
                            <span class="red-text"><?php echo $row['designation'] ;?></span>
                            <p class="gray-text"><?php echo $row['descrip']; ?></p>
                           
                          </div>
                      </div>


                 <?php

               }

           }


      ?>

   
    
    
</div>
   



    </div>
  </div>




 
<div class="container " id="intersting1">
  <div>
  <div class="row">
    <div class="col s12 center">
          <h5 class="red-text">< INTERESTING FACTS ></h5>
          <h2>The Numbers Speak for <br>themselve</h2>
        </div>
  </div>

  <div class="row" >
    <div class="col l4 s12 ">
      <ul class="collection #2196f3 blue blue-text z-depth-3 hoverable ">
      <li class="collection-item avatar center-align">
        <img src="img/icon-3.png" alt="" class="circle">
        <span class="title">Sucessfully Delivered</span>
        <p class="flow-text ">+<span class="counter" style="color: orange;">6500</span></p>
      </li>
   </ul>
    </div>
     <div class="col l4 s12">
        <ul class="collection #2196f3 blue blue-text z-depth-3">
      <li class="collection-item avatar center-align">
        <img src="img/icon-5.png" alt="" class="circle">
        <span class="title">Satisfied Clients</span>
        <p class="flow-text ">+<span class="counter" style="color: orange;">2495</span></p>
      </li>
   </ul>
      
    </div>
     <div class="col l4 s12">
        <ul class="collection #2196f3 blue blue-text z-depth-3">
      <li class="collection-item avatar center-align">
        <img src="img/icon-4.png" alt="" class="circle">
        <span class="title">Expert Employee</span>
        <p class="flow-text ">+<span class="counter" style="color: orange;">59</span></p>
      </li>
   </ul>
    </div>
     <div class="col l4 s12">
        <ul class="collection #2196f3 blue blue-text z-depth-3">
      <li class="collection-item avatar center-align">
        <img src="img/icon-4.png" alt="" class="circle">
        <span class="title">Expert Employee</span>
        <p class="flow-text ">+<span class="counter" style="color: orange;">554</span></p>
      </li>
   </ul>
    </div>
     <div class="col l4 s12">
        <ul class="collection #2196f3 blue blue-text z-depth-3">
      <li class="collection-item avatar center-align">
        <img src="img/icon-3.png" alt="" class="circle">
        <span class="title">Tons of Goods</span>
        <p class="flow-text ">+<span class="counter" style="color: orange;">5498</span></p>
      </li>
   </ul>
    </div>
     <div class="col l4 s12">
        <ul class="collection #2196f3 blue blue-text z-depth-3">
      <li class="collection-item avatar center-align">
        <img src="img/icon-5.png" alt="" class="circle">
        <span class="title">Branches Across</span>
        <p class="flow-text ">+<span class="counter" style="color: orange;">574</span></p>
      </li>
   </ul>
    </div>
    
  </div>
</div>
</div>



  <div class="container" id="Company">
    <div class="row">
      <div class="col s12 l6">
         <div class="row">
          <div class="col s12 center">
                <h5 class="red-text">< COMPANY ></h5>
                <h2>Providing Reliable Services </h2>
              </div>
          </div>

          <p class="">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
          <p><a class="waves-effect waves-light btn-large  btn pulse #2196f3 blue" href="About.php">View More</a></p>
          <br>
      </div>

      <div class="col s12 l6">
         <div class="card-image">
          <img src="img/pexels-mr-ivbn-11633745.jpg" class="materialboxed z-depth-4 responsive-img " width="100%" height="300px">
          
        </div>
      </div>
      
    </div>
    
  </div>



  <div  id="WORK">
     <div class="row">
        <div class="col s12 center">
          <h5 class="red-text">< HOW WE WORK ></h5>
          <h2>We Aim to Contribute Well to <br>Your Company</h2>
        </div>
        </div>

         


<div class="row">
  <div class="col s12 l3">
     <div class="square ">
        <span></span>
        <span></span>
        <span></span>
        <div class="content">
           <p><i class="fa fa-home" aria-hidden="true"></i></p>
           
            <h5>
              Warehousing Operation
            </h5>
           
        </div>
       </div>
  </div>

  <div class="col s12 l3">
    
        <div class="square  ">
        <span></span>
        <span></span>
        <span></span>
        <div class="content">
            <p><i class="fa fa-repeat" aria-hidden="true"></i></p>
            <h5>Replenishment Picking</h5>
          
            
        </div>
    </div>
  </div>


  <div class="col s12 l3">
     <div class="square  ">
        <span></span>
        <span></span>
        <span></span>
        <div class="content">
           <p><i class="fa fa-get-pocket" aria-hidden="true"></i></p>
            <h5>
                Packaging Distribution
            </h5>
           
            
        </div>
    </div>
  </div>


        <div class="col s12 l3">
           <div class="square ">
              <span></span>
              <span></span>
              <span></span>
              <div class="content">
                <p><i class="fa fa-truck" aria-hidden="true"></i></p>
                  <h5>
                    Transportation Process</h5>
                  
                  
              </div>
          </div>
        </div>
  
</div>

    
      </div>
      
 
  

 
 



 

<?php 
 
 include('footer.php');
?>

<script type="text/javascript">
  $('.parallax').parallax();
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
     autoplayTimeout:1000,
    autoplayHoverPause:true,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
})


</script>
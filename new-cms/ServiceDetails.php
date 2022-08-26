

<?php
include('header.php');
include('db.php');
 ?>

 
 <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <div class="col s12 l8 service_layer">
              <h4 class="header col s12 light white-text">Main Service Details Are aviaklable clearly check and make it your implemrent in Businesss.</h4>
              <?php //echo getcwd(); echo exec("pwd");?>
          </div>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="https://learn.g2crowd.com/hubfs/fullsizeoutput_4d.jpeg" alt="Unsplashed background img 2" style="opacity: 1;"></div>
  </div>

  <div id="ServiceDetails">
  	<div class="row">
  		<div class="col l8  s12 ">
         <?php 

            $id=$_GET['id'];
              //echo  $id;
           $sql="SELECT * FROM `services` where id=$id";
           $res=mysqli_query($con,$sql);
           $row=mysqli_fetch_assoc($res);

          ?>
         
             <div class="card">
        <div class="card-content ">

        	<img src="admin/images/services/<?php echo $row['img']; ?>">
          <span class="card-title"><?php echo $row['title'];?></span>
          <p><?php echo $row['short']; ?></p>
          <p><?php echo $row['descrip']; ?></p>
        </div>
       
      </div>
          <?php

           

         ?>
  		</div>

  		<div class="col l4 m12 s12 ">
  			
  <div class="collection z-depth-4">
     <div class="collapsible-header #2196f3 blue">
      Main Services
      </div>
  
       <?php 
          
           $sql="SELECT * FROM `services`";
           $res=mysqli_query($con,$sql);
            if(mysqli_num_rows($res)>0)
            {
                while($row=mysqli_fetch_assoc($res))
                {

                  ?>
                  <a href="ServiceDetails.php?id=<?php echo $row['id']; ?>" class="collection-item"><?php echo $row['title'] ?></a>
                  <?php

                }

            }


         ?>
  </div>





  <div class="collection z-depth-4">
     <div class="collapsible-header white-text #2196f3 blue">
      Tag Cloud
      </div>
   <a href="ServiceDetails.php?id=37" class="collection-item">Contact</a>
    <a href="ServiceDetails.php?id=37" class="collection-item">Cargo</a>
     <a href="ServiceDetails.php?id=37" class="collection-item">Office</a>
      <a href="ServiceDetails.php?id=37" class="collection-item">Warehouse</a>
       <a href="ServiceDetails.php?id=37" class="collection-item">Shipment</a>
        <a href="ServiceDetails.php?id=37" class="collection-item">Management</a>
         <a href="ServiceDetails.php?id=37" class="collection-item">Ocean</a>
          <a href="ServiceDetails.php?id=37" class="collection-item">Safety</a>
        
      
     </div>
         
  		</div>
  		
  	</div>
  	
  </div>








 <?php 
 include('footer.php');
?>
<?php 
include('header.php');

?>

<div class="section no-pad-bot" id="index-blog-cato">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Blog Catogory  </h1>
      <div class="row center">
        <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
      </div>
      <!--
      <div class="row center">
        <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light orange">Get Started</a>
      </div>-->
      <br><br>
      <br><br>
       <br><br>
    </div>
  </div>

    <div style="margin-top:50px;">
  	<div class=" ">
  		<div class="row">
  			<div class="col l8 s12 ">
  			  <div class="row">
  			  	<?php 

  			  	  $cato=$_GET['category'];
  			  	  //echo $cato;
                  
                   include('db.php');
                   $sql="SELECT * FROM `blog` where category='$cato'";
                   $res=mysqli_query($con,$sql);
                   if(mysqli_num_rows($res)>0)
                   {

                   	 while($row=mysqli_fetch_assoc($res))
                   	 {

    
                   	 	?>
                      <div class="col s12 m6 l12">
                   	 	<div class="card #2196f3 blue darken-1 blog-card">
								        <div class="card-content ">
								        	
								          <span class="card-title header white-text left-align"> <i class="fa fa-info-circle" aria-hidden="true"></i><?php echo $row['title'] ?></span>
		                                 <p>Type :<?php echo $row['category']; ?> By Admin </p>
								             <p>Dt : <?php echo $row['date']; echo "<br>";?></p>

								             <img class="z-depth-4 materialboxed responsive-img" src="admin/images/blog/<?php echo $row['img']; ?>">
								             <div class="row ">
								             	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
											        <a href="blog-detl.php?id=<?php echo $row['id'] ?>" id="download-button" class="btn-large waves-effect waves-light orange">More Details</a>
											      </div>
								             
								        </div>
						      
						         </div>
						       </div>

                   	 	<?php

                   	 }

                   }

  				       ?>
  			  </div>
  			  
  				
  			</div>
  			<div class="col s12 l4">
			  	<div class="collection z-depth-4">
			     <div class="collapsible-header #2196f3 blue">Categories
			      </div>
			  
			       <?php 
			          
			           include('db.php');
			           $sql="SELECT * FROM `category`";
			           $res=mysqli_query($con,$sql);
			            if(mysqli_num_rows($res)>0)
			            {
			                while($row=mysqli_fetch_assoc($res))
			                {

			                  ?>
			                  <a href="blog-cato.php?category=<?php echo $row['cat_name'];?>" class="collection-item"><?php echo $row['cat_name'] ?></a>
			                  <?php

			                }

			            }


			         ?>
			  </div>



			  <div class="collection z-depth-4">
			     <div class="collapsible-header #2196f3 blue">Recent Posts
			      </div>
			  
			       <?php 
			          
			           include('db.php');
			           $sql="SELECT * FROM `blog`";
			           $res=mysqli_query($con,$sql);
			            if(mysqli_num_rows($res)>0)
			            {
			                while($row=mysqli_fetch_assoc($res))
			                {

			                  ?>
			                  <a href="blog-detl.php?id=<?php echo $row['id']; ?>" class="collection-item"><?php echo $row['title'] ?></a>
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
  	
  </div>


<?php 
include('footer.php');

?>
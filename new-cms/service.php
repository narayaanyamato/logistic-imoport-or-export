

<?php 

  include('header.php');
?>


 <div class="faq">
<div class="container" >
		      <br><br>
		      <h1 class="header center orange-text">Professional Services</h1>
		      <div class="row center">
		        
		      </div>
		      
		      <br><br>
		       <br><br>
		       <br><br>
		    </div>
     </div>


     <div class="container" id="faq">
     	<div class="row">
        <div class="col s12 center">
          <h5 class="red-text">< MAIN SERVICES ></h5>
          <h2>MAIN SERVICES Moving Your Products<br> Across All Borders</h2>
        </div>
        </div>


        <div class="row">
        	<div class="l10">
        		<p >We give complete A to Z solution starting from product sourcing shipping delivery at your doorstep. We specialize in all kinds of export import items from USA CHINA INDIA CANADA UAE & WORLDWIDE.</p>
        	</div>
        	
        </div>

        
        <div class="row">
         <?php 
          
           include('db.php');
           $sql="SELECT * FROM `services`";
           $res=mysqli_query($con,$sql);
            if(mysqli_num_rows($res)>0)
            {
                while($row=mysqli_fetch_assoc($res))
                {

                  ?>
                   
                   <div class="col l4 m4">

                   <div class="card z-depth-2 #eeeeee grey lighten-3">
                            <div class="card-image">
                              <img height="270px" src="admin/images/services/<?php echo $row['img']; ?>">
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
   




<div class="container">

  <div class="row" id="faq">
        <div class="col s12 left">
          <h5 class="red-text">< VALUE ADDED SERVICES ></h5>
          <h2>Transida Offers Various Value Added Services in Logisitcs</h2>
        </div>
      </div>
    <div class="row">
        <div class="col s12 l12">
            <div class="card horizontal z-depth-3 #e0e0e0 grey lighten-2">
              <div class="card-image">
                <img  class="materialboxed" src="img/pexels-photo-3888149.jpeg" height="320px">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h4 class="blue-text">Cargo Insurance</h4>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                </div>
              
              </div>
            </div>
       </div>



       <div class="col s12 m12 l12">
          
            <div class="card horizontal z-depth-3 #e0e0e0 grey lighten-2">
              <div class="card-image s12">
                <img class="materialboxed" src="img/pexels-roberto-nickson-2585913.jpg" height="320px" >
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h4 class="blue-text">Customs Clearance</h4>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                </div>
              
              </div>
            </div>
       </div>
        
    </div>
    
</div>

<?php 

 include('footer.php');
?>
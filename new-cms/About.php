
<?php 
 
 include('header.php');
?>

<div id="clouds">
    <div class="cloud x1"></div>
    <!-- Time for multiple clouds to dance around -->
    <div class="cloud x2"></div>
    <div class="cloud x3"></div>
    <div class="cloud x4"></div>
    <div class="cloud x5"></div>
</div>
<div class=" card-header" >


    <div class="row" id="About">
             <?php 
              include('db.php');
               $sql="SELECT * FROM `about`";
               $res=mysqli_query($con,$sql);
               if(mysqli_num_rows($res)>0)
               {

                 while($row=mysqli_fetch_assoc($res))
                 {

                ?>

                
                <div class="col s12 l12 inner " >
                    <div class="card ">
                    <div class="card-content white-text">
                      <span class="card-title"><?php echo $row['title'] ?></span>
                      <p><?php echo $row['descrip']; ?></p>
                    </div>
                  
                  </div>
                </div>
                <?php

                 }

                }
 
             ?>
        
    </div>


    
</div>



<div class="card-panel" id="team">

     <div class="row">
        <div class="col s12 center">
          <h5 class="red-text">< Team Member ></h5>
         
        </div>
        </div>
        
    <div class="row">
        <?php 

              include('db.php');
               $sql="SELECT * FROM `teams`";
               $res=mysqli_query($con,$sql);
               if(mysqli_num_rows($res)>0)
               {

                 while($row=mysqli_fetch_assoc($res))
                 {

                    ?>
                   <div class="col l3 m12">
                    <div class="card #2196f3 blue z-depth-3">
                    <img src="admin/images/team/<?php echo $row['img']; ?>" class="responsive-img" width="100%" height="200px">
                    <div class="card-content white-text">
                    <span class="card-title left-align"><?php echo $row['title']; ?></span>
                    <h6 class="red-text"><i><?php echo $row['designation']; ?></i></h6>
                    <p><?php echo $row['descrip']; ?>
                    </p>
                    </div>
                    <div class="card-action">
                    <a class="waves-effect btn"><i class="fa fa-facebook-official"></i></a>
                    <a class="waves-effect btn"><i class="fa fa-google-plus-official"></i></a>
                    <a class="waves-effect btn"><i class="fa fa-twitter"></i></a>
                    <a class="waves-effect btn"><i class="fa fa-linkedin"></i></a>
                    </div>
                    </div>
                    </div>

                    <?php


                 }



                }

        ?>
        
    </div>
    
</div>



    





<?php 
include('footer.php');

?>
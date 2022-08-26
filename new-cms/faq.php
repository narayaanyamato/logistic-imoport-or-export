

<?php
include('header.php');
?> 

 <div class="faq">
<div class="container" >
      <br><br>
      <h1 class="header center orange-text">Faq’s</h1>
      <div class="row center">
        <h5 class="header col s12 light white-text">If you Have Any Question Regrding company check it .</h5>
      </div>
      
      <br><br>
       <br><br>
       <br><br>
    </div>
     </div>


     <div class="container" id="faq">
     	<div class="row">
        <div class="col s12 center">
          <h5 class="red-text">< GET ANSWERS ></h5>
          <h2>Things You Need to Know and <br> We Know Your’s</h2>
        </div>
        </div>
     	
     </div>

     <div class="container">
     	<div class="row">
     		<?php 


               include('db.php');
               $sql="SELECT * FROM `faqs`";
               $res=mysqli_query($con,$sql);
               if(mysqli_num_rows($res)>0)
               {
                  while ($row=mysqli_fetch_assoc($res))
                   {

                   	?>
                    
		     		<ul class="collapsible expandable z-depth-3">
				    <li>
				      <div class="collapsible-header blue-text"><i class="material-icons">info</i><?php echo $row['title']; ?></div>
				      <div class="collapsible-body"><span >
				      	<?php echo $row['descc']; ?>
				      </span></div>
				    </li>
				  </ul>

                   	<?php
                  	 

                  }
               }

             
             
     		?>

     		
     	</div>
     	
     </div>

<?php
include('footer.php');
?> 
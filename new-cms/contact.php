
<?php 
 
 include('header.php');
?>


  <div class="parallax-container">
    
      	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1871.7508038087926!2d85.74920130797152!3d20.238021363229027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a19a86711664c99%3A0xc85af92386aacf42!2sTamando%20Bazar%2C%20Tamando%2C%20Bhubaneswar%2C%20Odisha%20752054!5e0!3m2!1sen!2sin!4v1660059478748!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      
  </div>


  

  <div class="container" id="detail">
  	<div class="card-panel #2196f3 blue z-depth-4">
  		<div class="row">
        <div class="col l6 s12">
  				<div class="contact_detl">
  					<div class="text-area">
                    <div class="text"><i class="fa fa-map-marker" aria-hidden="true"></i><strong>Tamando Bazar, Tamando, Bijipur, Bhubaneswar, Odisha 752054</strong>
                    </div>
                       </div>
  				</div>
  			</div>


  			<div class="col l6 s12">
  				<div class="contact_detl">
  					<div class="text-area">
	                    <div class="text"><i class="fa fa-clock-o" aria-hidden="true"></i><strong>Mon - Friday</strong> <br>08.00 am to 9.00pm</div>
                                                
                     </div>
  				</div>
  			</div>

  			<div class="col l6 s12">
  				<div class="contact_detl">
  					<div class="text-area">
                    <div class="text "><i class="fa fa-mobile" aria-hidden="true"></i><strong>Phone:</strong> <a class="white-text" href="tel:+91 7847 869 140"> +91 7847869140  <br>  +91 7377905282</a>
                    </div>
                       </div>
  				</div>
  			</div>


  			<div class="col l6 s12">
  				<div class="contact_detl">
  					<div class="text-area">
                    <div class="text ">
                    	<a style="" class="white-text" href="mail:swaynnarayan@gmail.com">
                    		<i class="fa fa-envelope" aria-hidden="true"></i>Mail : swaynnarayan@gmail.com  <br>  swaynnarayan!@gmail.com</a>
                    </div>
                       </div>
  				</div>
  			</div>
  			
  		</div>
  	</div>
  	
  </div>



  <div id="contact">
  <div class="container">

  	 <div class="row">
        <div class="col s12 center">
          <h5 class="red-text">< DROP A LINE></h5>
          <h2>We’re Always Here for You</h2>
          <p class="flow4 white-text">Please do not hesitate to contact us  <br>if you require further information about our logisitc service.</p>
        </div>
        </div>

  	   <div class="row">
    <form class="col s12" method="post" action="">
      <div class="row">
        <div class="input-field col s12 l6">
          <input placeholder="Enter your First Name " name="fname" id="first_name" type="text" class="validate">
          <label for="first_name blue">First Name</label>
        </div>
        <div class="input-field col s12 l6">
          <input id="last_name" name="lname" type="text" placeholder="Enter your Last Name "  class="validate">
          <label for="last_name blue">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 l6">
          <input id="email" type="text" name="email" placeholder="Enter your Email Address " class="validate">
          <label for="email">Email</label>
        </div>

        <div class="input-field col s12 l6">
          <input id="email" type="tel" name="phone" placeholder="Enter your Phone Number" class="validate">
          <label for="email">Phone</label>
        </div>
      </div>

       <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" name="msg" placeholder="Sent your Message..." class="materialize-textarea"></textarea>
          <label for="textarea1">Messaage</label>
        </div>
      </div>

      <div class="row">
        <input type="submit" value="Submit" class="waves-effect waves-light btn white blue-text" name="sub">
      </div>

    
    </form>
  </div>
  	
  </div>
  </div>      

<?php 
include('footer.php');

include('db.php');
if(isset($_POST['sub']))
{

	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$msg=$_POST['msg'];
     $sql="INSERT INTO `contact`(`id`, `fanme`, `lname`, `mail`, `phone`, `msg`) VALUES (null,'$fname','$lname','$email','$phone','$msg')";
    $res=mysqli_query($con,$sql);
    if($res==1)
    {
      echo '<script>alert("Message send Successfully.");</script>';
    }

    else
    {
 echo '<script>alert("Something ewrong try again");</script>';
    }

}

?>
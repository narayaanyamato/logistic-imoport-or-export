

  <a href="#" class="btn pulse #2196f3 blue" onclick="topFunction()" id="myBtn" title="Go to top">&#8593;</a> 
 

<script type="text/javascript">

	  function display()
    {    
    document.getElementById('load').style.display="none";
     }
	
var mybutton = document.getElementById("myBtn");
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


 document.onkeydown = function(e) {
            if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117)) {//Alt+c, Alt+v will also be disabled sadly.
                //alert('not allowed');
                window.open("error.html","_blank");
            }
            return false;
    };

</script>
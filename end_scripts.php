<script>
// When the user scrolls down 20px from the top of the document, slide down the navbar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
	if (document.documentElement.scrollTop <= 20) {
	document.getElementById("navbar2").style.top = document.documentElement.scrollTop+"px";
	}else{document.getElementById("navbar2").style.top = "0px";}
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {

	document.getElementById("navbar2").style.position = "fixed";
  } else {
    document.getElementById("navbar2").style.position  = "relative";
  }  
}



// js slider
//var slider = document.getElementById("myRange");
//var output = document.getElementById("demo");
//output.innerHTML = slider.value;

//slider.oninput = function() {
  //output.innerHTML = this.value;
//}


// functies voor de calculator

function sendValue() {
	var range = document.getElementById("myRange");
	
	var mn = range.value / range.value;
	var mnen = mn / 10;
	
	if (mn == 1){
		var geldmod = 1;
	}else{
	var geldmod = 1 + mnen;
	}
	document.getElementById("daysrange").innerHTML = geldmod;


  var x = document.getElementById("aantalPaginas");
  
  var checklink = "https://secure.2checkout.com/checkout/buy?merchant=250563804827&tpl=default&coupon=Get+15+procent+off&prod=UHYDAIKSED&qty="+ x.value;
  "https://secure.2checkout.com/checkout/buy/?Level=HighSchool&typ_of_writing=Essay+%28any+type%29&somename=50";
  document.getElementById("wordIndication").innerHTML = 'Amount of Words ~' + x.value * 400;
  document.getElementById("ThePrice").innerHTML = '<br>cost $ ' + Math.round(x.value * 40 * geldmod);
  document.getElementById("goto").setAttribute("href", checklink);
}

</script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<!-- Change the width and height values to suit you best -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<style>
	body, html {height:100%;}
	body {overflow: hidden; }
</style>

<script>
	window.addEventListener("keydown", function(e) {
	    // space, page up, page down and arrow keys:
	    if([32, 33, 34, 37, 38, 39, 40].indexOf(e.keyCode) > -1) {
	        e.preventDefault();
	    }
	}, false);
</script>

<script type="text/javascript">
    function toggle(){
    	console.log("In Toggle");
        var off=document.getElementsByClassName('button.general.full.enabled.hover-effect');
        jQuery('off').click(function(){
		  console.log("TEST");
		});
    }
</script>

<!-- Change the width and height values to suit you best -->
<div class="typeform-widget" data-url="https://sunny269.typeform.com/to/mMMGSc" data-text="Slice Talent" style="width:100%;height:90vH;"></div>
<script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'widget.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}})()</script>
<div id="logoTable" style="width:100%;height:20vH;">
	<table style="width:100%">
	  <tr>
	  	<th><img src="http://www.ycombinator.com/images/ycombinator-logo-fb889e2e.png" alt="Y Combinator" style="width:30px;height:30px;"></th>
		<th><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/Google-favicon-2015.png/150px-Google-favicon-2015.png" alt="Google" style="width:30px;height:30px;"></th> 
		<th><img src="http://www.turnerduckworth.com/media/filer_public/86/18/86187bcc-752a-46f4-94d8-0ce54b98cd46/td-amazon-smile-logo-01-large.jpg" alt="Amazon" style="width:30px;height:30px;"></th> 
		<th><img src="https://cdn.worldvectorlogo.com/logos/slack-1.svg" alt="Slack" style="width:30px;height:30px;"></th> 
		<th><img src="https://static1.squarespace.com/static/5134cbefe4b0c6fb04df8065/t/587fa2f4725e255a02f090cb/1484759799314/squarespace-logo-symbol-black.jpg" alt="Squarespace" style="width:30px;height:30px;"></th> 
		<th><img src="https://sendgrid.com/wp-content/themes/sgdotcom/pages/resource/brand/2016/SendGrid-Logomark.png" alt="Sendgrid" style="width:30px;height:30px;"></th> 
		<th><img src="https://upload.wikimedia.org/wikipedia/en/7/71/Optimizely-logo.png" alt="Optimizely" style="width:30px;height:30px;"></th> 
	  </tr>
	</table>
</div>

<script>
$(document).ready(function() {
	$('.button.general.full.enabled.hover-effect').click(function() {
	  console.log('#someButton was clicked');
	  $('#logoTable').hide();
	});
});
</script>

</html>
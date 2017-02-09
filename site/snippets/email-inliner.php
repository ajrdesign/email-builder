<style>
	.inline-wrapper {
		position: fixed;
	    bottom: 0;
	    left: 0;
	    right: 0;
	    width: 100%;
	    background: linear-gradient( rgba(45, 63, 113, 0.95), rgba(61, 77, 113, 0.95) );
	    padding: 30px;
	    text-align: center;
	}
	.form {
		width: 580px;
		margin: 0 auto;
	}
	.form-area {
		display: none;
	}
	input, button {
	    border: 3px solid #ffffff;
		background: transparent;
		padding: 10px 20px;
		display: inline;
		color: #fff;
		font-size: 16px;
	}
</style>
<script>
	function ready(fn) {
  if (document.readyState != 'loading'){
    fn();
  } else {
    document.addEventListener('DOMContentLoaded', fn);
  }
}

ready(function () {
    // Adds the doc type to the top of the document
    var doctype = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\"><html xmlns=\"http://www.w3.org/1999/xhtml\">";
    var pageHtml = document.getElementById('email-wrapper').innerHTML;
    // Combines doctype and the HTML email into one
    var finalBuild = doctype + pageHtml
    // Posts the combined data to the inliner
    document.getElementById('js-textarea').value = finalBuild;
    //el.addEventListener('click', function () {
    	
    //});

});
</script>
<div class="inline-wrapper">
	<form class="form" action="https://templates.mailchimp.com/resources/inline-css/" target="_blank" method="post">
	    <textarea class="form-area" id="js-textarea" name="html" placeholder="Paste your HTML here to convert." style="width:500px; height:100px;"></textarea>
	    <input type="submit" class="form-button" value="Get test ready HTML">
	</form>
</div>
</html>
</span>
<style>
	.inline-wrapper {
		position: fixed; 
    bottom: 0;
    left: 0;
    right: 0;
    width:100%;
    background: #fff;
    padding: 30px;
	}
	.form {
		width: 580px;
		margin: 0 auto;
	}
	.form-area {
		display: none;
	}
	input, button {
		border: 2px solid #0083db;
		background: transparent;
		padding:6px 10px;
		display: inline;
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
    //var el = document.getElementById('js-insertHtmlBtn');
    //console.log(el);
    var doctype = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\"><html xmlns=\"http://www.w3.org/1999/xhtml\">";
        var pageHtml = document.getElementById('email-wrapper').innerHTML;
        console.log(doctype);
        var finalBuild = doctype + pageHtml
        document.getElementById('js-textarea').value = finalBuild;
    //el.addEventListener('click', function () {
    	
    //});
});
</script>
<div class="inline-wrapper">
	<form class="form" action="http://templates.mailchimp.com/resources/inline-css/" target="_blank" method="post">
	    <textarea class="form-area" id="js-textarea" name="html" placeholder="Paste your HTML here to convert." style="width:500px; height:100px;"></textarea>
	    <input type="submit" class="form-button" value="Get test ready HTML">
	</form>
</div>
</html>
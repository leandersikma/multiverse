<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <base href="<?php echo BASEURL; ?>">

    <!-- Le styles -->
    <link href="media/bootstrap/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
      .postData { 
	      display:none;
      }
      
      .key {
	      color:#ff0000;
	      font-weight: 600;
      }
    </style>
    <link href="media/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

  <body>

   <!--
 <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Project name</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse 
        </div>
      </div>
    </div>

-->
    <div class="container hero-unit">

	<h1>Debugger <small>to debug the API!</small></h1>
	
	<form method="" action="">
		<fieldset>
		<legend>Debug configurations</legend>
		
		<label for="debugURL">Debug API URL</label>
		<?php echo BASEURL; ?><input type="text" class="span6" name="debugURL" class="debugURL"/> <br />
		
		Header
		<label class="radio">
			<input type="radio" name="header" class="radioButton" id="headerGET" value="get" checked>
			GET
		</label>
		<label class="radio">
			<input type="radio" name="header" class="radioButton" id="headerPOST" value="post">
			POST
		</label>
		
		<div class="postData">
			<label for="postData">POST Data</label>
			<textarea class="span6" name="postData" id="postData" type="text"></textarea>
		</div>
		
		<div>
			<button type="submit" class="btn btn-primary">Debug!</button>
			<button type="button" class="btn">Cancel</button>
		</div>
		
		</fieldset>
		<div class="debugData">
		<fieldset>
		<legend>Parsed data</legend>
		</fieldset>
		</div>
	</form>
	<div id="debugData" class="span9">
	
	</div>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="media/javascript/jquery-1.8.3.min.js"></script>
    <script src="media/bootstrap/js/bootstrap.min.js"></script>
        
    <script>
		$(function() {
			$(".debugData").hide();
			$(".radioButton").change(function() {
				if($(this).attr("value") == "post") {
					$(".postData").show();
				} else {
					$(".postData").hide();
				}
			});
			
			$(".btn").click(function(e) {
				e.preventDefault();
				var method = $("input[name=header]:radio:checked").attr("value");
				var url = $("input[name=debugURL]").attr("value");
				if(method == "get") {
					$(".debugData").show();
					$.get(url, function(data) {
					  $('#debugData').html("<pre>" + syntaxHighlight(data) + "</pre>");
					  
					});
				} else if(method == "post") {
					var post = $("#postData").val();
					/*
var postArray = post.split("&");
					var keyValues = new Array();
					for(value in postArray) {
						tempArray = postArray[value].split("=");
						keyValues[tempArray[0]] = tempArray[1];
					}
*/
					
					$.post(url, post,
					  function(data) {
					     $('#debugData').html("<pre>" + syntaxHighlight(data) + "</pre>");
					});
					
					
					
				
					// Todo ajax call post
				} else {
					
				}
				
				
			});
		});
		
		
		function syntaxHighlight(json) {
    if (typeof json != 'string') {
         json = JSON.stringify(json, undefined, 2);
    }
    json = json.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
    return json.replace(/("(\\u[a-zA-Z0-9]{4}|\\[^u]|[^\\"])*"(\s*:)?|\b(true|false|null)\b|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?)/g, function (match) {
        var cls = 'number';
        if (/^"/.test(match)) {
            if (/:$/.test(match)) {
                cls = 'key';
            } else {
                cls = 'string';
            }
        } else if (/true|false/.test(match)) {
            cls = 'boolean';
        } else if (/null/.test(match)) {
            cls = 'null';
        }
        return '<span class="' + cls + '">' + match + '</span>';
    });
}
    </script>
  </body>
</html>

<?php
/* include 'AES.php';
$inputText = "My text to encrypt dd";
$inputKey = "9999999999999999";
$blockSize = 256;
$aes = new AES ( $inputText, $inputKey, $blockSize );
$enc = $aes->encrypt ();
$aes->setData ( $enc );
$dec = $aes->decrypt ();
echo "After encryption: " . $enc . "<br/>";
echo "After decryption: " . $dec . "<br/>"; */
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Data Security</title>
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
</head>
<body>
	<div class="container">
		<div class="well">
			<h1>
				<i>AES encryption</i>
			</h1>
			<p>Encrypt and decrypt text with AES algorithm</p>
			<form action="#" class="js-ajax-php-json" method="post" accept-charset="utf-8">
				Enter your Text here: <br>
				<textarea class="input-block-level" rows="5" name="inputText" id="inputText"></textarea>
			   <br>KEY: 
				<input type="password" id="inputKey" name="inputKey" class="input-block-level input-large" placeholder="Key of the encryption" autocomplete="off" /> 
					<br>
					TYPE: 
					<select name="blockSize">
					<option value="128" selected="selected">128 Bit</option>
					<option value="192">192 Bit</option>
					<option value="256">256 Bit</option>
					</select>
					<br>
					MODE:
					<select name="encdec">
					<option value="encrypt" selected="selected">Encrypt</option>
					<option value="decrypt">Decrypt</option>
					</select><br>
					<br>
				
				<!-- aes_main_top_resp -->

				<input class="btn pull-right btn-inverse btn-small" value="Submit" name="direction" type="submit">
					<br><br>
				<label>Results: </label><br>
				<textarea class="the-return" rows="5" name="the-return" id="the-return" readonly="readonly"></textarea>			
			</form>
		</div>
	  </div>
	  
<!--Put the following in the <head>-->
	<script type="text/javascript">
		$("document").ready(function(){
		  $(".js-ajax-php-json").submit(function(){
			  //alert("i am in");
		    var data = {
		      
		    };
		    data = $(this).serialize() + "&" + $.param(data);
		    $.ajax({
		      type: "POST",
		      url: "aes.php", //Relative or absolute path to response.php file
		      data: data,
		      success: function(data) {
		        $(".the-return").html(
		           data
		        );
		       // alert("Form submitted successfully.\nReturned json: " + data["json"]);
		      }
		    });
		    return false;
		  });
		});
	</script>		

	<div id="footer">
		<div class="container">
			<p class="">
                  Developed by <a href="http://devchakra.com">DevChakra</a>
			</p>
		</div>
	</div>



</body>
</html>
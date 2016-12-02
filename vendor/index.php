<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Komentar Ajax</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<style media="screen">
	*{
		font-family: 15px; font-family: sans-serif;
	}
	body{width: 80%; margin:10% auto;}
</style>
</head>
<body>
<h1>Artikel Ari</h1>
<p>Isi Artikel</p>

<textarea name="textarea_komentar" id="textarea_komen" rows="8" cols="40"></textarea><br>
<input type="submit" name="submit_komen" id="submit_komen" value="Submit">
<div id="komentar_wrapper">
<?php
	include_once 'database.php';
	$query = "SELECT * FROM komentar";
	$comments = mysqli_query($link, $query);
	foreach ($comments as $comment) {?>
	<p> <?=$comment['isi_komentar']?></p>	
	<?php } ?>
</div>
<script type="text/javascript">
	
$('#submit_komen').on('click',function(){
var isi = $('#textarea_komen').val();
$.ajax({
  method: "POST",
  url: "komentar_ajax.php",
  data: {isi_komentar : isi},
  success: function(data){
  $('#komentar_wrapper').prepend(data);
  }
});
});


</script>
</body>
</html>
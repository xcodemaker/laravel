<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <script type="text/javascript" src="jquery-3.2.1.min"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
  <!-- <script src="main.js"></script> -->
  </head>
<body>
<!-- <div class="dan">
<p>Dan is </p>
</div>
<div id="Iwao">
<p>amazing</p>
</div> -->
<div class="wrapper" style="display: flex;">
		<div style="width: 300px; border-right: 1px solid #008B8B; padding-top: 150px; padding-left: 30px; padding-right: 30px; height: 100vh;">
			  <form method="POST" id="form1" >
			  		<div class="form-group">
					    <label for="titlefield">Title</label>
					    <input titlefield type="text" class="form-control" id="titlefield" name="titlefield">
			  		</div>
					<div class="form-group">
					    <label for="descfield">Description</label>
					    <input type="text" class="form-control" id="descfield" name="descfield">
					</div>
					<div class="form-group">
					    <label for="datefield">Date Captured</label>
					    <input type="date" class="form-control" id="datefield" min="2010-12-31"  name="datefield">
					</div>
					<div class="form-group" style="margin-bottom: 40px;">
					    <label for="imagefield">Image</label>
					    <input type="file" id="imagefield" accept="image/x-png,image/gif,image/jpeg" name="imagefield">
					</div>
			  <!-- <button type="submit" class="btn btn-info" style="width: 200px; margin-left: 20px;" onclick="addDetails(document.getElementById('titlefield').value,document.getElementById('descfield').value,document.getElementById('datefield').value,document.getElementById('imagefield').value)">Add Image</button> -->
			  <input type="submit" value="add" id='submit' name="submit" class="btn btn-info" style="width: 200px; margin-left: 20px;">
			  </form>
		</div>
		<div id="viewblock"></div>
	</div>
</body>
<script>
// $("#Iwao").ready(function(){
//     $(".dan").click(function(){
//         alert("Hey you clicked on me");
//     });
// });
// $(".dan").ready(function(){
//     $("#Iwao").click(function(){
//         alert("Hey you clicked on me again");
//     });
// });
$("#submit").click(function(){
		alert("submit");
		//e.preventDefault();

          //var a=$(#titlefield).val();

          //alert(a);

          $.ajax({
            type: 'POST',
            url: 'addDetails.php',
            data: $('form').serialize(),
            success: function (data) {
              	alert('form was submitted');
				  $("#viewblock").html(data);
              	//window.location.href='addDetails.php';
            }
          });
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script>
	if( !window.jQuery ) document.write('<script src="jquery-3.0.0.min.js"><\/script>');
</script>

</html>

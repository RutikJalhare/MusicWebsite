<!--<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>
		Embedding YouTube video in Bootstrap modal
	</title>
	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
	</script>
	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
	</script>
	<style>
		.bs-example {
			margin: 20px;
		}
		
		.modal-content iframe {
			margin: 0 auto;
			display: block;
		}
	</style>
	<script>
		$(document).ready(function() {
			var url = $("#Geeks3").attr('src');
			$("#Geeks2").on('hide.bs.modal', function() {
				$("#Geeks3").attr('src', '');
			});
			$("#Geeks2").on('show.bs.modal', function() {
				$("#Geeks3").attr('src', url);
			});
		});
	</script>
</head>

<body>
	<center>
		<h1 style="color:green">
		GeeksforGeeks
	</h1>

		<h3>
		How to embed YouTube video in Bootstrap modal?
	</h3>
		<div class="bs-example">
		<a href="#Geeks2"
			class="btn btn-lg btn-primary"
			data-toggle="modal"><img src="/storage/emulated/0/DCIM/Camera/IMG_20211230_082704.jpg" width="300" height="300" alt="Natural" />

</a>
 


  





			<div id="Geeks2" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button"
									class="close"
									data-dismiss="modal"
									aria-hidden="true">×</button>
							<h4 class="modal-title">GeeksforGeeks</h4>
						</div>
						<div class="modal-body">
							<iframe id="Geeks3" width="450" height="350"
									src=
"https://www.youtube.com/embed/V5he1JXiQbg"
									frameborder="0" allowfullscreen>
							</iframe>
						</div>
					</div>
				</div>
		</div>
	</div>
	</center>
</body>

</html>-->

<?php
define('SITEURL','http://0.0.0.0:8080/food-order/') ;
define('LOCALHOST','localhost:3306') ;
define('DB_USERNAME','root') ;
define('DB_PASSWORD','root') ;
define('DB_NAME','musicweb') ;
$conn=mysqli_connect( LOCALHOST, DB_USERNAME,DB_PASSWORD) or die(mysqli_error);//database connections
$dbs=mysqli_select_db($conn,DB_NAME) or die(mysqli_error());

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
	</script>
	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
	</script>
	<style>
		.bs-example {
			margin: 20px;
		}
		
		.modal-content iframe {
			margin: 0 auto;
			display: block;
		}
	</style>
	<script>
		$(document).ready(function() {
			var url = $("#Geeks3").attr('src');
			$("#Geeks2").on('hide.bs.modal', function() {
				$("#Geeks3").attr('src', '');
			});
			$("#Geeks2").on('show.bs.modal', function() {
				$("#Geeks3").attr('src', url);
			});
		});









	</script>


<style>
*{
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

.row{
  background-color: lightblue;
  width: 100%;
  height: 900px;
  overflow: scroll;
}

.search{
border:2px solid black;
padding:20px;
font-size:20px;
margin-left:200px;
margin-top:10px;

padding-left:100px;
}
.sea-btn{
padding:20px;
font-size:20px;
}
</style>

</head>
<body>
<div class="top-div">
<marquee behavior="scroll" direction="left"> 
<img src="/storage/emulated/0/WhatsApp/Media/WhatsApp Images/IMG-20220128-WA0048.jpg" width="300" height="300" alt="Natural" />

<img src="/storage/emulated/0/DCIM/Camera/IMG_20211230_082704.jpg" width="300" height="300" alt="Natural" />

 </marquee>

</marque>


</div>



<input class="search" type="text" placeholder="search">

<input value="search" class="sea-btn" type="submit" placeholder="search">

<div class="row">
<?php
$sql1="SELECT *FROM tbl_category";

//execute the query
$res1=mysqli_query($conn,$sql1) ;
//count rows

//create a serial variable assign it value 1


$count1=mysqli_num_rows($res1) ;


if($count1>0)
{
while($rows1=mysqli_fetch_assoc($res1)) 
{

 $songimage=$rows1['songimage'];
?>

<?php 
if($songimage=="not upload") 
{
echo " Image Not Added";
}
else
{
?>

  <div class="column">
<button href="#Geeks2"
			class="btn btn-lg btn-primary"
			data-toggle="modal" >
<img src="http://0.0.0.0:8080/Musicwebsite/songimg/<?php echo $songimage;?>"width="200px" height="300px">
</button>

<button href="#Geeks2"
			class="btn btn-lg btn-primary"
			data-toggle="modal" onclick="ab()">press</button>

  </div>
<?php
}

}
}
?>
</div>

<!-- from here -->


			<div id="Geeks2" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button"
									class="close"
									data-dismiss="modal"
									aria-hidden="true">×</button>
							<h4 class="modal-title">GeeksforGeeks</h4>
						</div>
						<div class="modal-body">
							<iframe id="cad" width="450" height="350"
		src = "https://www.youtube.com/embed/V5he1JXiQbg"
									frameborder="0" allowfullscreen>
							</iframe>
						</div>
					</div>
				</div>
		</div>
	</div>
<script>
function ab() 
{
  //document.write("https://www.youtube.com/embed/"+ram);
document.getElementById("cad").src = "https://www.youtube.com/embed/MAWF0ZAoGuQ";
https://youtu.be/MAWF0ZAoGuQ

}
</script>

<!--to here -->

</body>
</html>







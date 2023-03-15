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
 background-color: pink;
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





</div>

<form action="" method="POST">

<input class="search" name="sear" type="text" placeholder="search">

<input value="search" name="search" class="sea-btn" type="submit" placeholder="search">

</form>
<div class="row">

<?php
 $search=$_GET['search'];


?>



<?php
if(isset($_POST['search'])) 

{

$search=$_POST['sear'];
//SELECT * FROM tble_food WHERE title LIKE '%$search%' OR description LIKE '%$search%'";

$sql1="SELECT *FROM tbl_category
WHERE songdes LIKE '%$search%'";


$res1=mysqli_query($conn,$sql1) ;



$count1=mysqli_num_rows($res1) ;


if($count1>0)
{
while($rows1=mysqli_fetch_assoc($res1)) 
{

 $songimage=$rows1['songimage'];
 $songlink=$rows1['title'];
 $song=$rows1['song'];

?>		
<div id="Geeks2" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button"
									class="close"
									data-dismiss="modal"
									aria-hidden="true">×</button>
							<h4 class="modal-title"></h4>
						</div>
						<div class="modal-body">
		<iframe id="cad" width="580" height="350"
		
									frameborder="0" allowfullscreen>
</iframe>


	<!--	<a  download="<?php echo $song ;
?>" font-size="20px" align="center" href="mown/<?php echo $song ;
?>" class="down">Download-mp3</a>		-->		</div>
					</div>
				</div>

</div>
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
			data-toggle="modal" onClick="ab('<?php echo $songlink;?>')">


<figure>

<img src="http://0.0.0.0:8080/Musicwebsite/songimg/<?php echo $songimage;?>"width="200px" height="300px">



</figure>


</button>
<figcaption>

		<a  download="<?php echo $song ;
?>" font-size="20px" align="center" href="mown/<?php echo $song ;
?>" class="down">Download-mp3</a>	

</figcaption>



  </div>
<?php
}

}
}

}
else
{

$search=$_GET['search'];

//echo "not";
$sql1="SELECT *FROM tbl_category
WHERE songdes LIKE '%$search%'";


$res1=mysqli_query($conn,$sql1) ;



$count1=mysqli_num_rows($res1) ;


if($count1>0)
{
while($rows1=mysqli_fetch_assoc($res1)) 
{

 $songimage=$rows1['songimage'];
 $songlink=$rows1['title'];
 $song=$rows1['song'];

?>		
<div id="Geeks2" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button"
									class="close"
									data-dismiss="modal"
									aria-hidden="true">×</button>
							<h4 class="modal-title"></h4>
						</div>
						<div class="modal-body">
		<iframe id="cad" width="580" height="350"
		
									frameborder="0" allowfullscreen>
</iframe>


	<!--	<a  download="<?php echo $song ;
?>" font-size="20px" align="center" href="mown/<?php echo $song ;
?>" class="down">Download-mp3</a>		-->		</div>
					</div>
				</div>

</div>
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
			data-toggle="modal" onClick="ab('<?php echo $songlink;?>')">
<figure>

<img src="http://0.0.0.0:8080/Musicwebsite/songimg/<?php echo $songimage;?>"width="200px" height="300px">



</figure>


</button>
<figcaption>

		<a  download="<?php echo $song ;
?>" font-size="20px" align="center" href="mown/<?php echo $song ;
?>" class="down">Download-mp3</a>	

</figcaption>


  </div>
<?php
}

}
}






}
?>
</div>

<!-- from here -->


			<!--<div id="Geeks2" class="modal fade">
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
		<iframe id="cad" width="580" height="350"
		
									frameborder="0" allowfullscreen>
</iframe>


		<a  download="<?php echo $song ;
?>" font-size="20px" align="center" href="mown/<?php echo $song ;
?>" class="down">Download-mp3</a>				</div>
					</div>
				</div>-->
		 
	</div>
<script>
function ab(ram) 
{
 
document.getElementById("cad").src =  "https://www.youtube.com/embed/"+ram;
;

}
</script>

<!--to here -->

</body>
</html>







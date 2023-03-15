<html>
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
<body>

<iframe id="myframe" class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY" allowfullscreen></iframe>

<!--

<p>Click the button to change the src attribute in the iframe.</p>
-->

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
echo  $id=$rows1['id'];
 echo  $ima=$rows1['title'];

echo $image_name1=$rows1['image_name'];


?>
<button onclick="myFunction('<?php echo $ima;?>')"><?php echo $ima;?></button>


<?php
}
}





?>
<!DOCTYPE html>
<html>
<body>







<!-- id="myframe" class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY" allowfullscreen></iframe>



<p>Click the button to change the src attribute in the iframe.</p>

<button onclick="myFunction('rutik')">Try it</button>

-->


<script>
function myFunction(ram) 
{
  //document.write("https://www.youtube.com/embed/"+ram);
document.getElementById("myframe").src = "https://www.youtube.com/embed/"+ram;


}
</script>

</body>
</html>









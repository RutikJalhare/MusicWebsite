<?php

define('SITEURL','http://0.0.0.0:8080/food-order/') ;
define('LOCALHOST','localhost:3306') ;
define('DB_USERNAME','root') ;
define('DB_PASSWORD','root') ;
define('DB_NAME','musicweb') ;
$conn=mysqli_connect( LOCALHOST, DB_USERNAME,DB_PASSWORD) or die(mysqli_error);//database connections
$dbs=mysqli_select_db($conn,DB_NAME) or die(mysqli_error());

?>
<form action="" method="POST" enctype="multipart/form-data">
<!--enctype  property help to uplt image-->
<table class="tbl-30">

<tr>
<td>song Description:</td>
<td>
<input type="text" name="songdes" placeholder="song Description">
</td> 
</tr>


<tr>
<td>link Address:</td>
<td>
<input type="text" name="title" placeholder="Category title">
</td> 
</tr>

<tr>
<td>select song:</td>
<td><input type="file" name="song"></td>
</tr>


<tr>
<td>select  song image:</td>
<td><input type="file" name="songimage"></td>
</tr>




<tr>

<td colspan="2">
<input type="submit" name="submit" value="Add Category" class="btn-secondary">
</td> 
</tr>
</table>
</form>

<?php

?> 
<?php
if(isset($_POST['submit'])) 
{

 echo  $title=$_POST['title'];
 echo  $songdes=$_POST['songdes'];


//for song 
if(isset($_FILES['song']['name'])) 
{
  $song=$_FILES['song']['name'];

//upload image only when image is selected


  $source_path=$_FILES['song']['tmp_name'];
  $destination_path="mown/".$song;

       $upload=move_uploaded_file($source_path,$destination_path) ;

if($upload==false) 
{
$song="not upload";//not uploaded
//echo "fail to upload image";
//stop the process

}
else
{

echo $song="$song";
}

}
//for image
if(isset($_FILES['songimage']['name'])) 
{
  $songimage=$_FILES['songimage']['name'];

//upload image only when image is selected


  $source_path=$_FILES['songimage']['tmp_name'];
  $destination_path="songimg/".$songimage;

       $upload=move_uploaded_file($source_path,$destination_path) ;

if($upload==false) 
{
$songimage="not upload";//not uploaded
//echo "fail to upload image";
//stop the process

}
else
{

echo $songimage="$songimage";
}

}

$sql="INSERT INTO tbl_category SET
title='$title',
songdes='$songdes', 
songimage='$songimage',
song='$song'
";

$res=mysqli_query($conn,$sql)or die(mysqli_error($conn)) ;

if($res==true)
{
echo "yes inserted ";
}
else
{
echo "not inserted";
}




$sql1="SELECT * FROM tbl_category";

//execute the query
$res1=mysqli_query($conn,$sql1) ;
//count rows

//create a serial variable assign it value 1


$count1=mysqli_num_rows($res1) ;

if($count1>0)
{
while($rows1=mysqli_fetch_assoc($res1)) 
{
 $id=$rows1['id'];
$songdes=$rows1['songdes'];
 $title=$rows1['title'];
 $simage=$rows1['songimage'];
 $song=$rows1['song'];

?>
<table>
<tr>
<td>
<?php echo $id;?>
</td>

<td>
<?php echo $songdes;?>
</td>


<td>
<?php echo $title;?>
</td>

<td>
<?php echo $simage;?>
</td>

<td>
<?php echo $song;?>
</td>

</tr>
</table>
<?php



}
}





}


?>

    
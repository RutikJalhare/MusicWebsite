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
<html lang="en">
<head>
<meta charset="utf-8">
<title>Example of Embedding YouTube Video inside Bootstrap Modal</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
    .bs-example{
    	margin: 20px;
    }
    .modal-dialog iframe{
        margin: 0 auto;
        display: block;
    }
</style>
<script>
$(document).ready(function()
{
  
   
 var url = $("#cartoonVideo").attr('src');
    
     
    $("#myModal").on('hide.bs.modal', function(){
        $("#cartoonVideo").attr('src', '');
    });
    
     
    $("#myModal").on('show.bs.modal', function(){
        $("#cartoonVideo").attr('src', url);
    });
});
</script>
</head>
<body>

    <!-- Button HTML (to Trigger Modal) -->
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
<button  href="#myModal" class="btn btn-primary btn-lg" data-toggle="modal" onclick="myFunction('<?php echo $ima;?>')"><?php echo $ima;?></button>
  

<?php
}
}





?>

<?php

/*


$a=1;
while($a<3) 
{
?>
  <a href="#myModal" class="btn btn-primary btn-lg" data-toggle="modal"><button onclick="myFunction('<?php echo $ima;?>')"><?php echo $a;?></button></a>
  
<?php
$a++; 
}
*/
?>
   <!--<a href="#myModal" class="btn btn-primary btn-lg" data-toggle="modal">Launch Demo Modal</a>-->
    

    

    
    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">YouTube Video</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe id="cartoonVideo" class="embed-responsive-item" width="560" height="315"  allowfullscreen></iframe>
  

                

</div>
             </div>
         <!--rutik --> </div>
        </div>
    </div>

    <script>
function myFunction(ram) 
{
  //document.write("https://www.youtube.com/embed/"+ram);
document.getElementById("cartoonVideo").src = "https://www.youtube.com/embed/"+ram;


}
</script>
</body>
</html>
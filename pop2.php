<?php

define('SITEURL','http://0.0.0.0:8080/food-order/') ;
define('LOCALHOST','localhost:3306') ;
define('DB_USERNAME','root') ;
define('DB_PASSWORD','root') ;
define('DB_NAME','musicweb') ;
$conn=mysqli_connect( LOCALHOST, DB_USERNAME,DB_PASSWORD) or die(mysqli_error);//database connections
$dbs=mysqli_select_db($conn,DB_NAME) or die(mysqli_error());

?>
 

<!--unknow part   -->
<?php
/*
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
*/
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
.down{
font-size:20px;
}
.div1 button{
border:2px solid black;
margin:5px;
border:2px solid black
background-color: #eee;
  color: black;
  display: block;
  padding: 12px;
  text-decoration: none;

}
.div2
{
border:2px solid black;
margin-top:10%;
/*height:100%;
overflow:scroll;*/
height:500px;
  width: 100%;
  overflow: scroll;

}
.search{
border:2px solid black;
margin-left:60%;
padding:20px;
}
.butt{
border:2px solid black;
margin-left:87%;
padding:10px;

}

.head{
margin-top:50px;
font-size:100px;
color:#4399a8;
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
<h1 class="head" align="center">YOUTUNE</h1>

    <!-- Button HTML (to Trigger Modal) -->

<div scroll="scroll" class="div2">
<div class="div1">

<form method="POST" action="#">
<table>
<tr>
<td>
<input class="search"  placeholder="search here"  name="sea" type="text">


<input type="submit" name="search" class="butt" placeholder="search here" >


</td>
</tr>


</tr>

</table>
</form>
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
 $id=$rows1['id'];
  $ima=$rows1['title'];
 $image_name1=$rows1['image_name'];


?>


<button  href="#myModal" class="btn btn-primary btn-lg" data-toggle="modal" onclick="myFunction('<?php echo $ima;?>')"><?php echo $ima;?></button>
  


<?php
}
}





?>
</div>
</div>
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
     <!--rutik -->  
<a download="mown/<?php echo $image_name1 ;
?>" align="center" href="mown/<?php echo $image_name1 ;
?>" class="down">Download-mp3</a>
<!--<a download="alarm.mp3" href="alarm.mp3" >Download</a>-->



 </div>
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

<?php

//get the search keyboard 

if(isset($_POST['search'])) 
{

$search=$_POST['sea'];
//sql query to get foods based on search keybot 
$sql="SELECT * FROM tbl_category WHERE title LIKE '%$search%'";

//execute the query 
$res=mysqli_query($conn,$sql) ;

//count row
$count=mysqli_num_rows($res);
// check wheather the food available or not 
if($count>0) 
{
//food available

while($row=mysqli_fetch_assoc($res)) 
{
//get the details
echo $id=$row['id'];
echo $title=$row['title'];

}

}
//echo "ok";
}


?>






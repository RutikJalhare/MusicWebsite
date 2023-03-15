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
$(document).ready(function(){
    /* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
    var url = $("#cartoonVideo").attr('src');
    
    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#myModal").on('hide.bs.modal', function(){
        $("#cartoonVideo").attr('src', '');
    });
    
    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed again */
    $("#myModal").on('show.bs.modal', function(){
        $("#cartoonVideo").attr('src', url);
    });
});
</script>
</head>
<body>

</body>

    <!-- Button HTML (to Trigger Modal) -->








<?php

$a=1;
while($a<3) 
{
?>
 <a href="#myModal" class="btn btn-primary btn-lg" data-toggle="modal">Launch Demo Modal</a>
    

    

    
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
                    <iframe id="cartoonVideo" class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY" allowfullscreen></iframe>
  

                

</div>
             </div>
        </div>
        </div>
    </div>
<?php
$a++;
}

?>
  
     

</html>










<!--<!DOCTYPE html>
<html>
<body>

<iframe id="myframe" class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY" allowfullscreen></iframe>



<p>Click the button to change the src attribute in the iframe.</p>

<button onclick="myFunction()">Try it</button>

<script>
function myFunction() {
  document.getElementById("myframe").src = "https://www.youtube.com/embed/tgbNymZ7vqY";
}
</script>

</body>
</html>-->





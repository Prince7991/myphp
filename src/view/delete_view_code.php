<?php
require("src/connection.php");

session_start();
$id = $_REQUEST['id'];
$sql ="DELETE FROM notes WHERE sno = '$post_id'  ";
$result = mysqli_query($conn,$sql);

if($result){
  header("locatoin:".BASEPATH.'?path=src/view/view_post.php');
}

echo "dlnscskjsk;lvjsk;lfjs;lfjs;lfjs;lfsj;". $id ;

?>
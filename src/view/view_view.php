<?php

require("src/connection.php");
$sql="SELECT * FROM notes";
$result= mysqli_query($conn,$sql);

    ?>
    <table>
        <tr>
            <th>S.No.</th>
            <th>Title</th>
            <th>Images</th>
            <th>Description</th>
            <th>Create</th>

        </tr>
      <?php
      $a = 1;
       while($row = mysqli_fetch_assoc($result)){
      ?>
        <tr>
          <td>  <?php echo $a ; ?> </td>
          <td>  <?php echo $row['title']  ; ?> </td>
          <td>          
              <img src="<?php echo BASEPATH.'uploads/'.$row['note_img'] ; ?>" width="100" height="100">
          </td>

          <td>  <?php echo $row['description'] ; ?> </td>
          <td>  <?php echo $row['tstamp'] ; ?> </td>

          <td> <button><a  href="<?php echo BASEPATH.'?path=src/view/delete_view_code.php?id='.$row['sno'] ;
          
          $_SESSION['id'] = $row['sno'];
          ?>">Delete</a></button></td>


        </tr>

  <?php
    $a++;
    };



// echo "Hello";

?>
 



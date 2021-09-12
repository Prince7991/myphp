<?php

if(isset($_POST)){
    $title = isset($_POST['title']) ? $_POST['title'] : "" ;
    $description = isset($_POST['description']) ? $_POST['description'] : "" ;
    if(isset($_FILES['post_img']) && ($_FILES['post_img']['error'] == 0)){
        
        $img = $_FILES['post_img'];
        
        // file validation : type
        $allowed_type = [
            'image/jpeg',
            'image/png',
            'image/jpg'
        ];
        $img_type = $img['type'];
        if(!in_array($img_type, $allowed_type)){
            echo "Please upload jpg, jpeg, png files only";
            exit;
        }
        // file size validation
        $allowed_size = 2097152;
        $img_size = $img['size'];
        if($img_size > $allowed_size){
            echo "Please use smaller image";
            exit;
        }
        $uploaded_file_name = $img['name'];
        $filename = date('jnyHis').$uploaded_file_name;
        $upload_path = 'uploads/';
        $path_to_file = $upload_path.$filename;
        $from = $img['tmp_name'];
        if(!move_uploaded_file($from, $path_to_file)){
            echo "unable to upload file please try again";
            exit;
        }
        // now insert values in db
        include('src/connection.php');
        $sql = "INSERT INTO notes(title, note_img, description) VALUES('$title', '$filename', '$description')";
        $insert_status = mysqli_query($conn, $sql);
        if(!$insert_status){
            echo "Unable to create post please try again.";
            exit;
        }
        echo "Post created successfully";




    }else{
        echo "Please select a file or upload a valid file";
    }
}else{
    echo "Please submit form";
}
<?php

// Car photo 1

// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["car-photo1"]) && $_FILES["car-photo1"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["car-photo1"]["name"];
        $filetype = $_FILES["car-photo1"]["type"];
        $filesize = $_FILES["car-photo1"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("../styles/images/" . $filename)){
                echo $filename . " is already exists.";
            } else {
                move_uploaded_file($_FILES["car-photo1"]["tmp_name"], "../styles/images/" . $filename);
                $res1 = "../styles/images/".$filename;
                // $upload_sql = "INSERT INTO car (foto_1) VALUES ('$res')";

                // if ($connect->query($upload_sql) === TRUE) {
                // echo "";
                // } else {
                // echo "Error: " .$upload_sql. "<br>" . $connect->error;
                // }

                echo "Fayllaringiz muvaffaqiyatli yuklandi.";
            } 
        } else {
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["car-photo1"]["error"];
    }
}


// Car photo 2

// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["car-photo2"]) && $_FILES["car-photo2"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["car-photo2"]["name"];
        $filetype = $_FILES["car-photo2"]["type"];
        $filesize = $_FILES["car-photo2"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("../styles/images/" . $filename)){
                echo $filename . " is already exists.";
            } else {
                move_uploaded_file($_FILES["car-photo2"]["tmp_name"], "../styles/images/" . $filename);
                $res2 = "../styles/images/".$filename;
                // $upload_sql = "INSERT INTO car (foto_2) VALUES ('$res')";

                // if ($connect->query($upload_sql) === TRUE) {
                // echo "";
                // } else {
                // echo "Error: " .$upload_sql. "<br>" . $connect->error;
                // }

                echo "Fayllaringiz muvaffaqiyatli yuklandi.";
            } 
        } else {
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["car-photo2"]["error"];
    }
}


// Car photo 3

// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["car-photo3"]) && $_FILES["car-photo3"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["car-photo3"]["name"];
        $filetype = $_FILES["car-photo3"]["type"];
        $filesize = $_FILES["car-photo3"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("../styles/images/" . $filename)){
                echo $filename . " is already exists.";
            } else {
                move_uploaded_file($_FILES["car-photo3"]["tmp_name"], "../styles/images/" . $filename);
                $res3 = "../styles/images/".$filename;
                // $upload_sql = "INSERT INTO car (foto_3) VALUES ('$res')";

                // if ($connect->query($upload_sql) === TRUE) {
                // echo "";
                // } else {
                // echo "Error: " .$upload_sql. "<br>" . $connect->error;
                // }

                echo "Fayllaringiz muvaffaqiyatli yuklandi.";
            } 
        } else {
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["car-photo3"]["error"];
    }
}


// Car photo 4

// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["car-photo4"]) && $_FILES["car-photo4"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["car-photo4"]["name"];
        $filetype = $_FILES["car-photo4"]["type"];
        $filesize = $_FILES["car-photo4"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("../styles/images/" . $filename)){
                echo $filename . " is already exists.";
            } else {
                move_uploaded_file($_FILES["car-photo4"]["tmp_name"], "../styles/images/" . $filename);
                $res4 = "../styles/images/".$filename;
                // $upload_sql = "INSERT INTO car (foto_4) VALUES ('$res')";

                // if ($connect->query($upload_sql) === TRUE) {
                // echo "";
                // } else {
                // echo "Error: " .$upload_sql. "<br>" . $connect->error;
                // }

                echo "Fayllaringiz muvaffaqiyatli yuklandi.";
            } 
        } else {
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["car-photo4"]["error"];
    }
}


// Car Video

// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["car-video1"]) && $_FILES["car-video1"]["error"] == 0){
        $allowed = array("mp4" => "video/mp4", "m4a" => "video/m4a", "3gp" => "video/3gp", "flac" => "video/flac");
        $filename = $_FILES["car-video1"]["name"];
        $filetype = $_FILES["car-video1"]["type"];
        $filesize = $_FILES["car-video1"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 100MB maximum
        $maxsize = 100 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("../styles/videos/" . $filename)){
                echo $filename." is already exists.";
            } else {
                move_uploaded_file($_FILES["car-video1"]["tmp_name"], "../styles/videos/" . $filename);

                $resVideo = "../styles/videos/" . $filename;
                // $uploadVideo_sql = "INSERT INTO car (video_1) VALUES ('$resVideo')";

                // if ($connect->query($uploadVideo_sql) === TRUE) {
                // echo "";
                // } else {
                // echo "Error: " .$uploadVideo_sql. "<br>" . $connect->error;
                // }

                echo "Fayllaringiz muvaffaqiyatli yuklandi.";
            } 
        } else {
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["car-video1"]["error"];
    }
}




// Documents photo 1

// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["doc-photo1"]) && $_FILES["doc-photo1"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["doc-photo1"]["name"];
        $filetype = $_FILES["doc-photo1"]["type"];
        $filesize = $_FILES["doc-photo1"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("../styles/images/documents/" . $filename)){
                echo $filename . " is already exists.";
            } else {
                move_uploaded_file($_FILES["doc-photo1"]["tmp_name"], "../styles/images/documents/" . $filename);
                $res5 = "../styles/images/documents/".$filename;
                // $upload_sql = "INSERT INTO documents (foto_1) VALUES ('$res')";

                // if ($connect->query($upload_sql) === TRUE) {
                // echo "";
                // } else {
                // echo "Error: " .$upload_sql. "<br>" . $connect->error;
                // }

                echo "Fayllaringiz muvaffaqiyatli yuklandi.";
            } 
        } else {
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["doc-photo1"]["error"];
    }
}



// Documents photo 2

// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["doc-photo2"]) && $_FILES["doc-photo2"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["doc-photo2"]["name"];
        $filetype = $_FILES["doc-photo2"]["type"];
        $filesize = $_FILES["doc-photo2"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("../styles/images/documents/" . $filename)){
                echo $filename . " is already exists.";
            } else {
                move_uploaded_file($_FILES["doc-photo2"]["tmp_name"], "../styles/images/documents/" . $filename);
                $res6 = "../styles/images/documents/".$filename;
                // $upload_sql = "INSERT INTO documents (foto_2) VALUES ('$res')";

                // if ($connect->query($upload_sql) === TRUE) {
                // echo "";
                // } else {
                // echo "Error: " .$upload_sql. "<br>" . $connect->error;
                // }

                echo "Fayllaringiz muvaffaqiyatli yuklandi.";
            } 
        } else {
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["doc-photo2"]["error"];
    }
}


// Documents Tex Photo 1

// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["tex_photo1"]) && $_FILES["tex_photo1"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["tex_photo1"]["name"];
        $filetype = $_FILES["tex_photo1"]["type"];
        $filesize = $_FILES["tex_photo1"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("../styles/images/documents/" . $filename)){
                echo $filename . " is already exists.";
            } else {
                move_uploaded_file($_FILES["tex_photo1"]["tmp_name"], "../styles/images/documents/" . $filename);
                $res7 = "../styles/images/documents/".$filename;
                // $upload_sql = "INSERT INTO documents (foto_3) VALUES ('$res')";

                // if ($connect->query($upload_sql) === TRUE) {
                // echo "";
                // } else {
                // echo "Error: " .$upload_sql. "<br>" . $connect->error;
                // }

                echo "Fayllaringiz muvaffaqiyatli yuklandi.";
            } 
        } else {
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["tex_photo1"]["error"];
    }
}


// Documents Tex Photo 2

// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["tex_photo2"]) && $_FILES["tex_photo2"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["tex_photo2"]["name"];
        $filetype = $_FILES["tex_photo2"]["type"];
        $filesize = $_FILES["tex_photo2"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("../styles/images/documents/" . $filename)){
                echo $filename . " is already exists.";
            } else {
                move_uploaded_file($_FILES["tex_photo2"]["tmp_name"], "../styles/images/documents/" . $filename);
                $res8 = "../styles/images/documents/".$filename;
                // $upload_sql = "INSERT INTO documents (foto_4) VALUES ('$res')";

                // if ($connect->query($upload_sql) === TRUE) {
                // echo "";
                // } else {
                // echo "Error: " .$upload_sql. "<br>" . $connect->error;
                // }

                echo "Fayllaringiz muvaffaqiyatli yuklandi.";
            } 
        } else {
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["tex_photo2"]["error"];
    }
}



// Documents Sug`urta 1

// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["insurance_photo1"]) && $_FILES["insurance_photo1"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["insurance_photo1"]["name"];
        $filetype = $_FILES["insurance_photo1"]["type"];
        $filesize = $_FILES["insurance_photo1"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("../styles/images/documents/" . $filename)){
                echo $filename . " is already exists.";
            } else {
                move_uploaded_file($_FILES["insurance_photo1"]["tmp_name"], "../styles/images/documents/" . $filename);
                $res9 = "../styles/images/documents/".$filename;
                // $upload_sql = "INSERT INTO documents (foto_5) VALUES ('$res')";

                // if ($connect->query($upload_sql) === TRUE) {
                // echo "";
                // } else {
                // echo "Error: " .$upload_sql. "<br>" . $connect->error;
                // }

                echo "Fayllaringiz muvaffaqiyatli yuklandi.";
            } 
        } else {
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["insurance_photo1"]["error"];
    }
}


// Documents Sug`urta 2

// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["insurance_photo2"]) && $_FILES["insurance_photo2"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["insurance_photo1"]["name"];
        $filetype = $_FILES["insurance_photo1"]["type"];
        $filesize = $_FILES["insurance_photo1"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("../styles/images/documents/" . $filename)){
                echo $filename . " is already exists.";
            } else {
                move_uploaded_file($_FILES["insurance_photo2"]["tmp_name"], "../styles/images/documents/" . $filename);
                $res10 = "../styles/images/documents/".$filename;
                // $upload_sql = "INSERT INTO documents (foto_6) VALUES ('$res')";

                // if ($connect->query($upload_sql) === TRUE) {
                // echo "";
                // } else {
                // echo "Error: " .$upload_sql. "<br>" . $connect->error;
                // }

                echo "Fayllaringiz muvaffaqiyatli yuklandi.";
            } 
        } else {
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["insurance_photo2"]["error"];
    }
}




// Documents Gaz akt 1

// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["gas_photo1"]) && $_FILES["gas_photo1"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["gas_photo1"]["name"];
        $filetype = $_FILES["gas_photo1"]["type"];
        $filesize = $_FILES["gas_photo1"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("../styles/images/documents/" . $filename)){
                echo $filename . " is already exists.";
            } else {
                move_uploaded_file($_FILES["gas_photo1"]["tmp_name"], "../styles/images/documents/" . $filename);
                $res11 = "../styles/images/documents/".$filename;
                // $upload_sql = "INSERT INTO documents (foto_7) VALUES ('$res')";

                // if ($connect->query($upload_sql) === TRUE) {
                // echo "";
                // } else {
                // echo "Error: " .$upload_sql. "<br>" . $connect->error;
                // }

                echo "Fayllaringiz muvaffaqiyatli yuklandi.";
            } 
        } else {
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["gas_photo1"]["error"];
    }
}



// Documents Gaz akt 2

// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["gas_photo2"]) && $_FILES["gas_photo2"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["gas_photo2"]["name"];
        $filetype = $_FILES["gas_photo2"]["type"];
        $filesize = $_FILES["gas_photo2"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("../styles/images/documents/" . $filename)){
                echo $filename . " is already exists.";
            } else {
                move_uploaded_file($_FILES["gas_photo2"]["tmp_name"], "../styles/images/documents/" . $filename);
                $res12 = "../styles/images/documents/".$filename;
                // $upload_sql = "INSERT INTO documents (foto_8) VALUES ('$res')";

                // if ($connect->query($upload_sql) === TRUE) {
                // echo "";
                // } else {
                // echo "Error: " .$upload_sql. "<br>" . $connect->error;
                // }

                echo "Fayllaringiz muvaffaqiyatli yuklandi.";
            } 
        } else {
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["gas_photo2"]["error"];
    }
}


// Documents Ijara shartnoma 1

// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["rent_photo1"]) && $_FILES["rent_photo1"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["rent_photo1"]["name"];
        $filetype = $_FILES["rent_photo1"]["type"];
        $filesize = $_FILES["rent_photo1"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("../styles/images/documents/" . $filename)){
                echo $filename . " is already exists.";
            } else {
                move_uploaded_file($_FILES["rent_photo1"]["tmp_name"], "../styles/images/documents/" . $filename);
                $res13 = "../styles/images/documents/".$filename;
                // $upload_sql = "INSERT INTO documents (foto_9) VALUES ('$res')";

                // if ($connect->query($upload_sql) === TRUE) {
                // echo "";
                // } else {
                // echo "Error: " .$upload_sql. "<br>" . $connect->error;
                // }

                echo "Fayllaringiz muvaffaqiyatli yuklandi.";
            } 
        } else {
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["rent_photo1"]["error"];
    }
}


// Documents Ijara shartnoma 2

// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["rent_photo2"]) && $_FILES["rent_photo2"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["rent_photo2"]["name"];
        $filetype = $_FILES["rent_photo2"]["type"];
        $filesize = $_FILES["rent_photo2"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("../styles/images/documents/" . $filename)){
                echo $filename . " is already exists.";
            } else {
                move_uploaded_file($_FILES["rent_photo2"]["tmp_name"], "../styles/images/documents/" . $filename);
                $res14 = "../styles/images/documents/".$filename;
                $upload_sql = "INSERT INTO documents (foto_10) VALUES ('$res')";

                // if ($connect->query($upload_sql) === TRUE) {
                // echo "";
                // } else {
                // echo "Error: " .$upload_sql. "<br>" . $connect->error;
                // }

                echo "Fayllaringiz muvaffaqiyatli yuklandi.";
            } 
        } else {
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["rent_photo2"]["error"];
    }
}

// Documents Ishonchnoma 1

// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["warrant_photo1"]) && $_FILES["warrant_photo1"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["warrant_photo1"]["name"];
        $filetype = $_FILES["warrant_photo1"]["type"];
        $filesize = $_FILES["warrant_photo1"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("../styles/images/documents/" . $filename)){
                echo $filename . " is already exists.";
            } else {
                move_uploaded_file($_FILES["warrant_photo1"]["tmp_name"], "../styles/images/documents/" . $filename);
                $res15 = "../styles/images/documents/".$filename;
                // $upload_sql = "INSERT INTO documents (foto_11) VALUES ('$res')";

                // if ($connect->query($upload_sql) === TRUE) {
                // echo "";
                // } else {
                // echo "Error: " .$upload_sql. "<br>" . $connect->error;
                // }

                echo "Fayllaringiz muvaffaqiyatli yuklandi.";
            } 
        } else {
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["warrant_photo1"]["error"];
    }
}




// Documents Ishonchnoma 2

// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["warrant_photo2"]) && $_FILES["warrant_photo2"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["warrant_photo2"]["name"];
        $filetype = $_FILES["warrant_photo2"]["type"];
        $filesize = $_FILES["warrant_photo2"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("../styles/images/documents/" . $filename)){
                echo $filename . " is already exists.";
            } else {
                move_uploaded_file($_FILES["warrant_photo2"]["tmp_name"], "../styles/images/documents/" . $filename);
                $res16 = "../styles/images/documents/".$filename;
                // $upload_sql = "INSERT INTO documents (foto_12) VALUES ('$res')";

                // if ($connect->query($upload_sql) === TRUE) {
                // echo "";
                // } else {
                // echo "Error: " .$upload_sql. "<br>" . $connect->error;
                // }

                echo "Fayllaringiz muvaffaqiyatli yuklandi.";
            } 
        } else {
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["warrant_photo2"]["error"];
    }
}



// Persons 1

// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["person_photo"]) && $_FILES["person_photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["person_photo"]["name"];
        $filetype = $_FILES["person_photo"]["type"];
        $filesize = $_FILES["person_photo"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("../styles/images/documents/" . $filename)){
                echo $filename . " is already exists.";
            } else {
                move_uploaded_file($_FILES["person_photo"]["tmp_name"], "../styles/images/documents/" . $filename);
                $res17 = "../styles/images/documents/".$filename;
                // $upload_sql = "INSERT INTO documents (foto_1) VALUES ('$res')";

                // if ($connect->query($upload_sql) === TRUE) {
                // echo "";
                // } else {
                // echo "Error: " .$upload_sql. "<br>" . $connect->error;
                // }

                echo "Fayllaringiz muvaffaqiyatli yuklandi.";
            } 
        } else {
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["person_photo"]["error"];
    }
}




// Persons 2

// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["respons_photo"]) && $_FILES["respons_photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["respons_photo"]["name"];
        $filetype = $_FILES["respons_photo"]["type"];
        $filesize = $_FILES["respons_photo"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("../styles/images/documents/" . $filename)){
                echo $filename . " is already exists.";
            } else {
                move_uploaded_file($_FILES["respons_photo"]["tmp_name"], "../styles/images/documents/" . $filename);
                $res18 = "../styles/images/documents/".$filename;
                // $upload_sql = "INSERT INTO documents (foto_2) VALUES ('$res')";

                // if ($connect->query($upload_sql) === TRUE) {
                // echo "";
                // } else {
                // echo "Error: " .$upload_sql. "<br>" . $connect->error;
                // }

                echo "Fayllaringiz muvaffaqiyatli yuklandi.";
            } 
        } else {
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["respons_photo"]["error"];
    }
}


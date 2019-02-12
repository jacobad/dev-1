<?php 

if(!empty($_POST['name']) || !empty($_POST['email']) || !empty($_FILES['file']['name'])){
    $uploadedFile = '';
    if(!empty($_FILES["file"]["type"])){
    	var_dump($_FILES);
    	var_dump($_POST);
        $fileName = time().'_'.$_FILES['file']['name'];
        $valid_extensions = array("jpeg", "jpg", "png");
        $temporary = explode(".", $_FILES["file"]["name"]);
        $file_extension = end($temporary);
        if((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")) && in_array($file_extension, $valid_extensions)){
            $sourcePath = $_FILES['file']['tmp_name'];
            $targetPath = "img/".$fileName;
            if(move_uploaded_file($_FILES['file']['tmp_name'],$targetPath)){
                $uploadedFile = $fileName;
            }
        }
    }
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    //include database configuration file
    
    
    //insert form data in the database
    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', 'troiswa');
    $pdo->exec('SET NAMES UTF8');
    $query = $pdo->prepare("INSERT INTO form_data (name,email,file_name) VALUES ('".$name."','".$email."','".$uploadedFile."')");
    //$insert = $db->query("INSERT form_data (name,email,file_name) VALUES ('".$name."','".$email."','".$uploadedFile."')");
    
    echo $insert?'ok':'err';
}

?>
<?php include './db.php';

function insert($db){

    $name = $_POST['name'];
    $price = $_POST['price'];
    $img= $_POST['img'];
    $description = $_POST['description'];
    
    $sql =  "INSERT INTO `products`(`name`, `description`, `price`, `img`) VALUES ('$name', '$description', '$price', '$img')";
    $result = mysqli_query($db, $sql);
     if($result): ?>
        <div class="alert alert-success" role="alert">
            This is a success!
        </div>
        <?php  header("location:index.php"); ?>
     <?php else: ?>
        <div class="alert alert-danger" role="alert">
            This is a danger!
        </div>
     <?php endif; 

}


function update($db){


    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $img= $_POST['img'];
    $description = $_POST['description'];
    $sql = "UPDATE `products` SET `name`='$name',`description`='$description',`price`='$price',`img`='$img' WHERE  `id` = $id" ;
    $result = mysqli_query($db, $sql);
    header("location:index.php");
     if($result): ?>
        <div class="alert alert-success" role="alert">
            Update is a success!
        </div>
     <?php else: ?>
        <div class="alert alert-danger" role="alert">
            Update is a danger!
        </div>
     <?php endif; 
}

if ($_POST['delete']) {
    function delete($id){
        global $db;
         $id = $_POST['id'];
      
        $sql = "DELETE FROM `products` WHERE `id` = $id";
        $result = mysqli_query($db, $sql);
    }
    if (isset($_POST['delete'])) {
        $id = $_POST['id'];
        delete($id);
        header("location:index.php");
    }
}


function select($table,$id=NULL){
    global $db;
    if ($id!=NULL) {
        $sql = "SELECT * FROM `$table` WHERE `id`=$id ";
        $result = mysqli_query($db,$sql);
        return mysqli_fetch_object($result);
    }
    else{
        $sql = "SELECT * FROM `$table` ORDER BY `id` DESC ";
        return mysqli_query($db,$sql);
    }
}
?>

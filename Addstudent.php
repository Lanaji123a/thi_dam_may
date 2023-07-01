<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once 'connect.php'
    ?>

    <?php
        if(isset($_POST['add-btn'])){
            $namestd = $_POST["name"];
            $phone = $_POST["phone"];
            $email = $_POST["email"];

            if($conn -> query("INSERT INTO student (namestd,phone,email) VALUE ('$namestd','$phone','$email')")){
                echo "<script> alert('Added')</script>";
            };
            
        }
    ?>

    <form action="" method="POST">
        <div class="add">
            <Label for="name">Name</Label>
            <input type="text" name="name" placeholder="Name">
        </div>
        <div class="add">
            <Label for="phone">Phone</Label>
            <input type="text" name="phone" placeholder="Phone number">
        </div>
        <div class="add">
            <Label for="email">Email</Label>
            <input type="text" name="email" placeholder="Email">
        </div>
        <button type="submit" name="add-btn"> Add</button>
    </form>
    <script> alert("Can not add")</script>

    
</body>
</html>
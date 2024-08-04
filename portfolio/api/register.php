<?php
    include("connect.php");

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $Cpassword = $_POST['Cpassword'];
    $address = $_POST['address'];
    $image = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name']; 
    $role = $_POST['role'];
   
    

    if($password==$Cpassword){

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        move_uploaded_file($tmp_name, "../uploads/$image");
        $insert = mysqli_query($connect, "INSERT INTO lister(name, mobile, password, address, photo, role, status, votes) VALUES ('$name','$mobile','$password','$address','$image','$role', 0, 0)");
        if($insert){
            echo '
            <script>
               alert("Registration Successful");
               window.location = "../";
            </script>
        ';
        }
        else{
            echo '
            <script>
               alert("Some error occured");
               window.location = "../routes/register.html";
            </script>
        ';
        }

    }
    else{
        echo '
        <script>
               alert("password and confirm password does nor match");
               window.location = "../routes/register.html";
        </script>
       ';
}

?>

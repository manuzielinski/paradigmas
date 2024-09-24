<?php

    include 'config.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $user = $_POST['user'];
    $password = $_POST['password'];

    $query = "INSERT INTO user (name, email, user, password) 
            VALUES ('$name', '$email', '$user', '$password)";

    $ejecutar = mysqli_query($con, $query);

    if($ejecutar) {
        echo "
        <script>
        alert('Usuario registrado exitosamente!');
        window.location.href='../index.php';
        </script>
        ";
    }else {
        echo "
        <script>
        alert('Intentalo nuevamente');
        window.location.href='../register.php';
        </script>
        ";
    }

    mysqli_close($con);
?>
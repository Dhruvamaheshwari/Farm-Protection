<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crop_protection";


try {

        // Step 1: Connect to Database
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Step 2: Check POST request
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $pass = $_POST['password'];

        // Step 3: Check if user exists
        $stmt = $conn->prepare("SELECT * FROM SignUP WHERE email = ? ");
        $stmt->bind_param("s", $email);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();

            // store the password in the haspass 
            $haspass = $user['password'];

            // to very the password in the fome of the encrept form
            if (password_verify($pass, $haspass)) {
                header("Location: ../main.html");  // or dashboard page
                exit();
            } else {
                echo "<script>alert('password is wrong');window.location.href = 'index.php';</script>";
            }
        } else {
            echo "<script>alert('User not found. Please Signup First!'); window.location.href = 'index.php';</script>";
        }

        $stmt->close();
    }

    $conn->close();
} 

// handle the exception
catch (mysqli_sql_exception) {
    echo "connection is failed try later!!";
}

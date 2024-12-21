<?php

$conn = mysqli_connect('localhost', 'root', 'Apoorvagr03@', 'book_db');


if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}


if (isset($_POST['send'])) {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guest = $_POST['guest'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    
    $stmt = $conn->prepare("INSERT INTO bookform (name, email, phone, address, location, guest, arrivals, leaving) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $name, $email, $phone, $address, $location, $guest, $arrivals, $leaving);


    if ($stmt->execute()) {
        
        header('Location: book.php');
        exit();
    } else {
        
        echo "Error: " . $stmt->error;
    }

    
    $stmt->close();
} else {
    
    echo 'Something went wrong, please try again.';
}


mysqli_close($conn);
?>

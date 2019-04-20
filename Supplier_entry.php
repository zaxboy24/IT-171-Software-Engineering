<?php
if (isset($_POST['submit'])){

    include_once 'dbconnector.php';

    $name =mysqli_real_escape_string($conn, $_POST['Prepare']);
    $address =mysqli_real_escape_string($conn, $_POST['Approve']);



    $sql = "INSERT INTO supplier (supp_name, Supp_address) VALUES ('$name','$address');";
    mysqli_query($conn, $sql);
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();

} else {
    echo "<h2>Not inserted bobo</h2>";
    exit();
}

?>
<?php
if (isset($_POST['submit'])){

    include_once 'dbconnector.php';

    $prepareBy =mysqli_real_escape_string($conn, $_POST['Req_by']);
    $ApproveBy=mysqli_real_escape_string($conn, $_POST['Qty_req']);



    $sql = "INSERT INTO purchase_request (requested_by) VALUES ('$requestedBy');";
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
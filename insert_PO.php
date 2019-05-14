<?php 
$connect = mysqli_connect("localhost", "root", "", "it 171");
$estimatedAmountOne = $estimatedAmountTwo = $estimatedAmountThree = $estimatedAmountFour = $estimatedAmountFive = "";
$productPriceOne = $productPriceTwo = $productPriceThree = $productPriceFour = $productPriceFive = "";

$productIdOne = $_POST["productIdOne"];
$productQtyOne = $_POST["productQtyOne"];
$productIdTwo = $_POST["productIdTwo"];
$productQtyTwo = $_POST["productQtyTwo"];
$productIdThree = $_POST["productIdThree"];
$productQtyThree = $_POST["productQtyThree"];
$productIdFour = $_POST["productIdFour"];
$productQtyFour = $_POST["productQtyFour"];
$productIdFive = $_POST["productIdFive"];
$productQtyFive = $_POST["productQtyFive"];
$prepname = $_POST["Prepname"]; 
$appname = $_POST["Appname"];
$suppname = $_POST["Suppname"];
// $prepname = mysqli_real_escape_string($connect,$_POST["prepname"]);
// $appname = mysqli_real_escape_string($connect, $_POST["appname"]);
// $suppname = mysqli_real_escape_string($connect, $_POST["suppname"]);

    if(!empty($_POST)){
        // for($count = 0; $count($product_id); $count++)
        // {
            // $product_id = mysqli_real_escape_string($connect, $product_id[$count]);
            // $product_qty = mysqli_real_escape_string($connect, $product_qty[$count]);
            if(!empty($productIdOne) || !empty($productIdTwo) || !empty($productIdThree) || !empty($productIdFour) || !empty($productIdFive)){
                
                // Item One
                $queryPriceOne = "SELECT Product_Price 
                FROM supplier_product WHERE Supp_ID = '$suppname' 
                AND Product_ID = $productIdOne";
                if($resultPriceOne = mysqli_query($connect, $queryPriceOne)){
                    while($row = mysqli_fetch_assoc($resultPriceOne)){
                        $productPriceOne = $row['Product_Price'];
                    }
                    $estimatedAmountOne = $productQtyOne * $productPriceOne;    
                }
                
                // Item Two
                $queryPriceTwo = "SELECT Product_Price 
                FROM supplier_product WHERE Supp_ID = '$suppname' 
                AND Product_ID = $productIdTwo";
                if($resultPriceTwo = mysqli_query($connect, $queryPriceTwo)){
                    while($row = mysqli_fetch_assoc($resultPriceTwo)){
                        $productPriceTwo = $row['Product_Price'];
                    }
                    $estimatedAmountTwo = $productQtyTwo * $productPriceTwo;
                }

                // Item Three
                $queryPriceThree = "SELECT Product_Price 
                FROM supplier_product WHERE Supp_ID = '$suppname' 
                AND Product_ID = $productIdThree";
                if($resultPriceThree = mysqli_query($connect, $queryPriceThree)){
                    while($row = mysqli_fetch_assoc($resultPriceThree)){
                        $productPriceThree = $row['Product_Price'];
                    }
                    $estimatedAmountThree = $productQtyThree * $productPriceThree;
                }

                // Item Four
                $queryPriceFour = "SELECT Product_Price 
                FROM supplier_product WHERE Supp_ID = '$suppname' 
                AND Product_ID = $productIdFour";
                if($resultPriceFour = mysqli_query($connect, $queryPriceFour)){
                    while($row = mysqli_fetch_assoc($resultPriceFour)){
                        $productPriceFour = $row['Product_Price'];
                    }
                    $estimatedAmountFour = $productQtyFour * $productPriceFour;
                }
                
                // Item Five
                $queryPriceFive = "SELECT Product_Price 
                FROM supplier_product WHERE Supp_ID = '$suppname' 
                AND Product_ID = $productIdFive";
                if($resultPriceFive = mysqli_query($connect, $queryPriceFive)){
                    while($row = mysqli_fetch_assoc($resultPriceFive)){
                        $productPriceFive = $row['Product_Price'];
                    }
                    $estimatedAmountFive = $productQtyFive * $productPriceFive;
                }
        
                if($estimatedAmountOne > 0){
                    $insertQuery = "INSERT INTO Purchase_order 
                    (Supp_ID, Approved_by, Prepared_by, Estemated_cost)
                    VALUES ($suppname, '$appname', 
                    '$prepname', $estimatedAmountOne)";

                    if(mysqli_query($connect, $insertQuery)){
                        $lastInsertedId = mysqli_insert_id($connect);

                        $insertProductOne = "INSERT INTO purchase_order_product
                        (pur_ord_id, product_id, quantity, estimated_amount)
                        VALUES ($lastInsertedId, $productIdOne,
                         $productQtyOne, $estimatedAmountOne)";

                         $insertProductTwo = "INSERT INTO purchase_order_product
                        (pur_ord_id, product_id, quantity, estimated_amount)
                        VALUES ($lastInsertedId, $productIdTwo,
                         $productQtyTwo, $estimatedAmountTwo)";

                         $insertProductThree = "INSERT INTO purchase_order_product
                        (pur_ord_id, product_id, quantity, estimated_amount)
                        VALUES ($lastInsertedId, $productIdThree,
                         $productQtyThree, $estimatedAmountThree)";

                         $insertProductFour = "INSERT INTO purchase_order_product
                        (pur_ord_id, product_id, quantity, estimated_amount)
                        VALUES ($lastInsertedId, $productIdFour,
                         $productQtyFour, $estimatedAmountFour)";

                         $insertProductFive = "INSERT INTO purchase_order_product
                        (pur_ord_id, product_id, quantity, estimated_amount)
                        VALUES ($lastInsertedId, $productIdFive,
                         $productQtyFive, $estimatedAmountFive)";

                        if(mysqli_query($connect, $insertProductOne)){
                            echo mysqli_error($connect);
                        }else{
                            echo "Failed. " . mysqli_error($connect);
                        }

                        if(mysqli_query($connect, $insertProductTwo)){
                            echo mysqli_error($connect);
                        }else{
                            echo "Failed. " . mysqli_error($connect);
                        }

                        if(mysqli_query($connect, $insertProductThree)){
                            echo mysqli_error($connect);
                        }else{
                            echo "Failed. " . mysqli_error($connect);
                        }

                        if(mysqli_query($connect, $insertProductFour)){
                            echo mysqli_error($connect);
                        }else{
                            echo "Failed. " . mysqli_error($connect);
                        }

                        if(mysqli_query($connect, $insertProductFive)){
                            echo mysqli_error($connect);
                        }else{
                            echo "Failed. " . mysqli_error($connect);
                        }
                    }else{
                        echo "Purchase Order query failed. " . 
                        mysqli_error($connect);
                    }
                }else{
                    echo mysqli_error($connect);
                    echo "Yay" . $productPrice ." " . $suppname . "<br>";
                    echo $Estimated_amount;
                }
            }
        // }
    }else{
        echo "Nope";
    }
?>
<?

include_once('dbconnector.php');

if(!empty($_POST))
{
    $product_name = $_POST["product_name"];
    $price = $_POST["price"];
    $description = $_POST["description"];
    $supp_name = $_POST["supp_name"];

    $insert_query ="INSERT INTO ware_house_product(Product_name, Description, Product_price)
    VALUES('$product_name,', '$description', '$price')";

    if(mysql_query($insert_query)){
        $fetch_data = "SELECT Product_ID from ware_house_product A
        WHERE A.product_name = '$product_name'";
        $result = mysql_query($fetch_data);

        while($row = mysql_fetch_array($result));{
        $prod_id = <?php echo $row['Product_ID'] ?>;

        $insert_to_supp = "INSERT INTO supplier_product(Product_ID , Supp_ID, Product_price, 'Description')
        VALUES('$prod_id,', '$supp_name', '$price', '$description')";

        mysql_query($insert_to_supp);
    }
    }
}

?>
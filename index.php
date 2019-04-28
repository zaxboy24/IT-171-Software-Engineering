<html>
<head>
     
    <title>Prototype rani</title>
</head>
<body background="21728684_1503547899729545_3209111352686405968_o.jpg">
    <marquee><h1>Purchase and Delivery</h1></marquee>
        <form class= "Pur_ord" action="PR_method.php", method="POST">
            <center>
                <table border="1" width = "400", height = "300">
                    <tr>
                    
                        <td colspan="5" align="center" bgcolor="green">Purchase Request</td>
                    </tr>
                    <tr>
                        <td align="center">Product Name:</td><td><input type="tex" name="Prod_Name"></td>
                    </tr>
                    <tr>
                        <td align="center">Requested By:</td><td><input type="tex" name="Req_by"></td>
                    </tr>
                    <tr>
                        <td align="center">Quantity Requested:</td><td><input type="tex" name="Qty_req"></td>
                    </tr>
                </table>
                <button type="delete">Delete</button>
                <button type="submit" name ="submit">Confirm</button>
            </center>
        </form>
 
       <form class = "Supplier" action="PO_method", method="POST">
            <center>
                <table border="1" width = "400", height = "300">
                    <tr>
                        <td colspan="5" align="center" bgcolor="grey">Purchase Order</td>
                    </tr
                    <tr>
                        <td align="center">PR ID:</td><td></td>
                    </tr>
                    }
            
                    <tr>
                        <td align="center">Product name:</td><td colspan = "5"></td>
                    </tr>
             
                    <tr>
                        <td align="center">Description:</td><td colspan = "5"></td>
                    </tr>
                    <tr>
                        <td align="center">Total Quantity:</td><td><input type="tex" name="Estimated"></td><td align="left">Estimated Cost:</td><td><input type="tex" name="Estimated"></td>
                    </tr>
                    <tr>
                        <td align="center">Prepared by:</td><td><input type="tex" name="Prepare"></td><td align="center">Approve by:</td><td><input type="tex" name="Approve"></td>
                    </tr>
                     
                    </table>
                    <button type="delete">Delete</button>
                    <button type="submit" name = "submit">Confirm</button>
            </center>        
        </form>

        <form class = "Supplier_entry" action="Supplier_entry.php", method="POST">
            <center>
                <table border="1" width = "400", height = "300">
                    <tr>
                        <td colspan="5" align="center" bgcolor="white">Supplier Entry</td>
                    </tr>
                    <tr>
                        <td align="center">Name:</td><td><input type="tex" name="Prepare"></td>
                    </tr>
                    <tr>
                        <td align="center">Address:</td><td><input type="tex" name="Approve"></td>
                    </tr>
                </table>
                    <button type="delete">Delete</button>
                    <button type="submit" name = "submit">Confirm</button>
            </center>        
        </form>

        <form class = "Delivery" action="", method="POST">
            <center>
                <table border="1" width = "400", height = "300">
                    <tr>
                        <td colspan="5" align="center" bgcolor="blue">Delivery Confirmation</td>
                    </tr>
                    <tr>
                        <td align="center">Supplier name:</td><td><input type="tex" name="name"></td>
                    </tr>
                    <tr>
                        <td align="center">Delivered by:</td><td><input type="tex" name="name"></td>
                    </tr>
                    <tr>
                        <td align="center">Delivered amount:</td><td><input type="tex" name="name"></td>
                    </tr>
                    <tr>
                        <td align="center">Terms:</td><td><input type="tex" name="name"></td>
                    </tr>
                    </table>
                    <button type="delete">Delete</button>
                    <button type="submit">Confirm</button>
            </center>
        </form>
</body>
</html>
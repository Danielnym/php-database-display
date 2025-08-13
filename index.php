<?php  
// This displays database data in the browser in 
// table format
require 'connection.php';
$Products = $pdo->query("SELECT Prdct_id, Prdct_name, Prdct_category, Prdct_unitprice, Prdct_stockquantity FROM Products")->fetchAll(PDO::FETCH_ASSOC);
$Customers = $pdo->query("SELECT Cstmr_id, Cstmr_name, Cstmr_email, Cstmr_phone, Cstmr_address FROM Customers")->fetchAll(PDO::FETCH_ASSOC);
$Employees = $pdo->query("SELECT Emplyee_id, Emplyee_name, Emplyee_position, Emplyee_phone, Emplyee_email FROM Employees")->fetchAll(PDO::FETCH_ASSOC);
$Sales = $pdo->query("SELECT Sales_id, Productid, Customerid, Employeeid, Sales_quntty, Sale_date, Sales_ttlamt FROM Sales")->fetchAll(PDO::FETCH_ASSOC); 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Database data</title>
            <style>
                body { font-family: Arial, sans-serif; }
                table { border-collapse: collapse;  width: 60%; margin: 20px auto; }    
                th, td {border: 1px solid #ccc; padding: 8px; text-align: center; }
                th { background-color: #f2f2f2; }
            </style>
    </head>        
    <body>
        <h2 style ="text-align: center;">Database Data</h2>
        <table>
            <tr>
                <th>Prdct_id</th>
                <th>Prdct_name</th>
                <th>Prdct_category</th>
                <th>Prdct_unitprice</th>
                <th>Prdct_stockquantity</th>
            </tr>
            <?php foreach ($Products as $row): ?>
            <tr>
                <td><?= htmlspecialchars($row['Prdct_id']) ?></td>
                <td><?= htmlspecialchars($row['Prdct_name']) ?></td>
                <td><?= htmlspecialchars($row['Prdct_category']) ?></td>
                <td><?= htmlspecialchars($row['Prdct_unitprice']) ?></td>
                <td><?= htmlspecialchars($row['Prdct_stockquantity']) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <table>
            <tr>
                <th>Cstmr_id</th>
                <th>Cstmr_name</th>
                <th>Cstmr_email</th>
                <th>Cstmr_phone</th>
                <th>Cstmr_address</th>
            </tr>
            <?php foreach ($Customers as $row): ?>
            <tr>
                <td><?= htmlspecialchars($row['Cstmr_id']) ?></td>
                <td><?= htmlspecialchars($row['Cstmr_name']) ?></td>
                <td><?= htmlspecialchars($row['Cstmr_email']) ?></td>
                <td><?= htmlspecialchars($row['Cstmr_phone']) ?></td>
                <td><?= htmlspecialchars($row['Cstmr_address']) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <table>
            <tr>
                <th>Emplyee_id</th>
                <th>Emplyee_name</th>
                <th>Emplyee_position</th>
                <th>Emplyee_phone</th>
                <th>Emplyee_email</th>
            </tr>
            <?php foreach ($Employees as $row): ?>
            <tr>
                <td><?= htmlspecialchars($row['Emplyee_id']) ?></td>
                <td><?= htmlspecialchars($row['Emplyee_name']) ?></td>
                <td><?= htmlspecialchars($row['Emplyee_position']) ?></td>
                <td><?= htmlspecialchars($row['Emplyee_phone']) ?></td>
                <td><?= htmlspecialchars($row['Emplyee_email']) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <table>
            <tr>
                <th>Sales_id</th>
                <th>Productid</th>
                <th>Customerid</th>
                <th>Employeeid</th>
                <th>Sales_quntty</th>
                <th>Sale_date</th>
                <th>Sales_ttlamt</th>
            </tr>
            <?php foreach ($Sales as $row): ?>
            <tr>
                <td><?= htmlspecialchars($row['Sales_id']) ?></td>
                <td><?= htmlspecialchars($row['Productid']) ?></td>
                <td><?= htmlspecialchars($row['Customerid']) ?></td>
                <td><?= htmlspecialchars($row['Employeeid']) ?></td>
                <td><?= htmlspecialchars($row['Sales_quntty']) ?></td>
                <td><?= htmlspecialchars($row['Sale_date']) ?></td>
                <td><?= htmlspecialchars($row['Sales_ttlamt']) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>   
</html>
    
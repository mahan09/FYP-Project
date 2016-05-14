

    <?php
    
      
        
           include 'includes/overall/header1.php';
           include 'includes/head.php';
           
           ?>


<?php
require_once "DBCLASS.php";
$q = intval($_GET['q']);






mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM Myincome";
$sql="SELECT * FROM Myincome WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);


echo "<table>
<tr>
<th>Income</th>
<th>Place to eat</th>
<th>Social place</th>
<th>Best Broadband Deal</th>
<th>Acommodation</th>
<th>How to Travel</th>
<th>Discounts Avaliable</th>
<th>Grocery</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['annual_income'] . "</td>";
    echo "<td>" . $row['Food_place'] . "</td>";
    echo "<td>" . $row['Social_places'] . "</td>";
    echo "<td>" . $row['Broadband'] . "</td>";
    echo "<td>" . $row['Acommodation'] . "</td>";
    echo "<td>" . $row['Travel'] . "</td>";
    echo "<td>" . $row['Discounts'] . "</td>";
    echo "<td>" . $row['Shop'] . "</td>";
    echo "</tr>";
}
echo "</table>";



mysqli_close($con);

?>

<style>
th, td {
    
    padding: 7px;
}

th, td {
    text-align: center;
}


tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}



</style>







</body>
</html>
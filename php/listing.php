<?php
session_start();
?>
<?php

        require('mysqli_connect.php');
        $query = "SELECT * FROM products222";
        $result = @mysqli_query($dbc,$query);
        $numrows = mysqli_num_rows($result);

            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                $pid = $row['product_id'];
                $name = $row['name'];
                $desc = $row['description'];
                $price = $row['price'];


                /*echo "$pid";
                echo "$name";
                echo "$desc";
                echo "$price";*/

                echo "<table>";
                echo "<tr>";
                echo "<td>Product ID</td>";
                echo "<td>Name</td>";
                echo "<td>Description</td>";
                echo "<td>Price</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>.$pid</td>";
                echo "<td>.$name</td>";
                echo "<td>.$desc</td>";
                echo "<td>.$price</td>";
                echo "</tr>";

                /*echo "<tr>";
                echo "<td>.$pid</td>";
                echo "<td>.$name</td>";
                echo "<td>.$desc</td>";
                echo "<td>.$price</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>.$pid</td>";
                echo "<td>.$name</td>";
                echo "<td>.$desc</td>";
                echo "<td>.$price</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>.$pid</td>";
                echo "<td>.$name</td>";
                echo "<td>.$desc</td>";
                echo "<td>.$price</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>.$pid</td>";
                echo "<td>.$name</td>";
                echo "<td>.$desc</td>";
                echo "<td>.$price</td>";
                echo "</tr>";*/



                echo "</table>";

            }
mysqli_close($dbc);
    ?>
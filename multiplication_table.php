<!DOCTYPE html>
<html>
    <head>
        <title>Multiplication table</title>
    </head>
    <body>
	<h3>Multiplication table</h3>
	
        <table align = "left" border = "1" cellpadding = "3" cellspacing = "0">
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= 10; $j++) {
                    echo "<td>$i * $j = " . $i * $j . "</td>";
                }
                echo "</tr>";
            }
            ?>    
        </table>
    </body>
</html>

<html>
<head></head>
<body>
<table width="240px" height="240px" border="1px" cellspacing="0px">
    <?php
    for($row=1; $row <= 8; $row++)
    {
        echo "<tr>";
        for($col=1; $col <=8; $col++)
        {
            $total=$row + $col;
            if($total%2 == 0)
            {
                echo "<td bgcolor=black></td>";
            }
            else
            {
                echo "<td bgcolor=white></td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
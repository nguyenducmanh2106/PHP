<?php
function display($n){
    for($i=1;$i<=10;$i++){
        echo"$n x $i =".$n*$i."<br/>";
    }
}
?>
<style>
    th{
        background:#b9fbf5;
    }
    td{
        padding:6px 20px;
    }
</style>
<table border="1" cellspacing="0">
        <tr>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
        </tr>
    <tr>
        <td>
            <?php
            echo display(1);
            ?>
        </td>
        <td>
            <?php
            echo display(2);
            ?>
        </td>
        <td>
            <?php
            echo display(3);
            ?>
        </td>
        <td>
            <?php
            echo display(4);
            ?>
        </td>
        <td>
            <?php
            echo display(5);
            ?>
        </td>
    </tr>
    <tr>
        <th>6</th>
        <th>7</th>
        <th>8</th>
        <th>9</th>
        <th>10</th>
    </tr>
    <tr>
        <td>
            <?php
            echo display(6);
            ?>
        </td>
        <td>
            <?php
            echo display(7);
            ?>
        </td>
        <td>
            <?php
            echo display(8);
            ?>
        </td>
        <td>
            <?php
            echo display(9);
            ?>
        </td>
        <td>
            <?php
            echo display(10);
            ?>
        </td>
    </tr>
</table>


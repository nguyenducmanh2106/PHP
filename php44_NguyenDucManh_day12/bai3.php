<table border="1" cellspacing="0">
    <tr>
        <th>Tên khóa học</th>
    </tr>
    <?php $arrs=['PHP','HMTL','CSS','JS']; foreach($arrs as $value):?>
    <tr>
        <td>
            <?php echo$value; ?>
        </td>
    </tr>
    <?php endforeach;?>
</table>
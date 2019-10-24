<style>
    .container{
        border:1px solid #000;
        display:table;
        margin:50px auto;
    }
    .cell-black{
        background:#000;
        width:50px;
        height:50px;
        display:inline-block;
    }
    .cell-white{
        background:#fff;
        width:50px;
        height:50px;
        display:inline-block;
    }
</style>
<div class="container">
    <?php for($i=0;$i<8;$i++):?>
        <?php if($i%2==0):?>
            <?php for($j=0;$j<8;$j++):?>
                <?php if($j%2==0):?>
                    <div class="cell-black"></div>
                <?php else:?>
                    <div class="cell-white"></div>
                <?php endif;?>
            <?php endfor;?>
            <?php echo"<br/>"?>
        <?php else:?>
            <?php for($j=0;$j<8;$j++):?>
                <?php if($j%2!=0):?>
                    <div class="cell-black"></div>
                <?php else:?>
                    <div class="cell-white"></div>
                <?php endif;?>
            <?php endfor;?>
            <?php echo"<br/>"?>
        <?php endif;?>
    <?php endfor;?>
</div>

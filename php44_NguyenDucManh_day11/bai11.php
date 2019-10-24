<style>
    .container{
        display: table;
        border:1px solid #000;
    }
    .cell{
        width: 50px;
        height: 50px;
        border-right:1px solid #000;
        border-bottom:1px solid #000;
        display: inline-block;
        text-align: center;
        line-height: 50px;
    }
    .cell-snt{
        width: 50px;
        height: 50px;
        border-right:1px solid #000;
        border-bottom:1px solid #000;
        display: inline-block;
        text-align: center;
        line-height: 50px;
        background:green;
    }
</style>
<?php
function check_snt($n){
    if($n==1) return false;
    else{
        for($i=2;$i<$n;$i++)
            if($n%$i==0)
                return false;
            return true;
    }
}
?>
<div class="container">
    <?php $count=1;?>
    <?php for($i=0;$i<10;$i++):?>
        <?php for($j=0;$j<10;$j++):?>
                <?php if(check_snt($count)):?>
                <div class="cell-snt">
                    <?php echo $count++;?>
                </div>
                <?php else:?>
                    <div class="cell">
                        <?php echo $count++;?>
                    </div>
                <?php endif;?>
        <?php endfor;?>
        <br/>
    <?php endfor;?>
</div>
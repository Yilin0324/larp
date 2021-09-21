<div>
<h4 class="main-title text-center mt-2"><?=$ts[$do];?></h4>
    
    <form method="post" action="api/manage.php">
        <table class="table table-bordered text-center table-light table-striped align-middle">
            <tbody>
                <tr>
                    <td>傳送門</td>
                    <td style="width:30%">連結</td>
                    <td>顯示</td>
                    <td>刪除</td>
                </tr>
                <?php

$all=$Link->count();
$div=5;
$pages= ceil($all/$div);
$now=isset($_GET['p'])?$_GET['p']:1;
$start=($now-1)*$div;
$rows=$Link->all(" limit $start,$div");
foreach ($rows as $key => $value) {
?>
<tr>
    <td>
        <input type="text" name="text[]" value="<?=$value['text'];?>">
    </td>
    <td>
        <input type="text" name="href[]" value="<?=$value['href'];?>">
    </td>
    <td>
        <input type="checkbox" name="sh[]" value="<?=$value['id'];?>" <?=($value['sh']==1)?"checked":"";?>>
    </td>
    <td>
        <input type="checkbox" name="del[]" value="<?=$value['id'];?>">    
    </td>

    <input type="hidden" name="id[]" value="<?=$value['id'];?>">
</tr>
<?php
}
?>                
            </tbody>
        </table>
        <div class="cent">
        <?php
            if(($now-1)>0){
                echo "<a href='?do=larp_link&p=".($now-1)."'> < </a>";
            }

            for($i=1;$i<=$pages;$i++){
                $fontsize=($now==$i)?'24px':'16px';
                echo "<a href='?do=larp_link&p=$i' style='font-size:$fontsize'> $i </a>";
            }

            if(($now+1)<=$pages){
                echo "<a href='?do=larp_link&p=".($now+1)."'> > </a>";
            }

        ?>
        </div>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px">
                        <input type="button" data-bs-toggle="modal" data-bs-target="#hiModel" value="<?=$as[$do];?>">
                    </td>
                    <td class="cent">
                        <input type="submit" value="修改確定">
                        <input type="reset" value="重置">
                        <input type="hidden" name="table" value="<?=$do;?>">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>
</div>

<!-- insert model-->
<div class="modal fade" id="hiModel" tabindex="-1" aria-labelledby="modelLable" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modelLable"><?=$hs['larp_link'];?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="api/manage.php" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <table style="margin:auto;">
                        <tr class="mb-3">
                            <td>傳送門：</td>
                            <td><input type="text" name="text[]"></td>
                        </tr>

                        <tr>
                            <td>連結：</td>
                            <td><input type="text" name="href[]"></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="新增">
                    <input type="reset" class="btn btn-danger" value="重置">
                    <input type="hidden" name='table' value='<?=$do;?>'>
                    <input type="hidden" name="id[]" value="">
                </div>
            </form>
        </div>
    </div>
</div>
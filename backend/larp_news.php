<div>
<h4 class="main-title text-center mt-2"><?=$ts[$do];?></h4>
    
    <form method="post" action="api/manage.php">
        <table class="table table-bordered text-center table-light table-striped align-middle">
            <tbody>
                <tr>
                    <td style="width:15%">活動圖片</td>
                    <td style="width:8%">標題</td>
                    <td style="width:8%">時間</td>
                    <td style="width:8%">地點</td>
                    <td style="width:40%">活動簡介</td>
                    <td>顯示</td>
                    <td>刪除</td>
                    <td style="width:10%"></td>
                </tr>
                <?php

$all=$News->count();
$div=4;
$pages= ceil($all/$div);
$now=isset($_GET['p'])?$_GET['p']:1;
$start=($now-1)*$div;
$rows=$News->all("order by `id` desc limit $start,$div");
foreach ($rows as $key => $value) {
?>
<tr>
    <td>
        <img src="img/<?=$value['img'];?>" style="width:100px;height:68px;">
    </td>
    <td>
        <input type="text" name="title[]" value="<?=$value['title'];?>">
    </td>
    <td>
        <input type="text" name="day[]" value="<?=$value['day'];?>">
    </td>
    <td>
        <input type="text" name="place[]" value="<?=$value['place'];?>">
    </td>
    <td>
        <textarea name="text[]"  style="width:90%;height:60px"><?=$value['text'];?></textarea>
    </td>
    <td>
        <input type="checkbox" name="sh[]" value="<?=$value['id'];?>" <?=($value['sh']==1)?"checked":"";?>>
    </td>
    <td>
        <input type="checkbox" name="del[]" value="<?=$value['id'];?>">    
    </td>
    <td>
    <input type="button" 
                        value="更換圖片" onclick="location.href='modal/news_update.php?id=<?=$value['id'];?>'">
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
                echo "<a href='?do=larp_news&p=".($now-1)."'> < </a>";
            }

            for($i=1;$i<=$pages;$i++){
                $fontsize=($now==$i)?'24px':'16px';
                echo "<a href='?do=larp_news&p=$i' style='font-size:$fontsize'> $i </a>";
            }

            if(($now+1)<=$pages){
                echo "<a href='?do=larp_news&p=".($now+1)."'> > </a>";
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
                <h5 class="modal-title" id="modelLable"><?=$hs['larp_news'];?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="api/manage.php" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <table style="margin:auto;">
                        <tr class="mb-3">
                            <td style="text-align:right">活動圖片：</td>
                            <td style="text-align:right"><input type="file" class="form-control" name="img"></td>
                        </tr>
                        <tr class="mb-3">
                            <td>標題：</td>
                            <td><input type="text" name="title[]"></td>
                        </tr>
                        <tr class="mb-3">
                            <td>時間：</td>
                            <td><input type="text" name="day[]"></td>
                        </tr>
                        <tr>
                            <td>活動簡介：</td>
                            <td>
                                <textarea name="text[]" class="form-control" style="height:200px;"></textarea>
                            </td>
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
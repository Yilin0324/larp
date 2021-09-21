<div style="width:99%; margin:auto;">
<h4 class="main-title text-center mt-2"><?=$ts[$do];?></h4>
    
    <form method="post" action="api/manage.php">
        <table width="100%" class="table table-bordered text-center table-light table-striped align-middle">
            <tbody>
                <tr>
                    <td width="45%">活動照片</td>
                    <td width="23%">替代文字</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td></td>
                </tr>
            <?php
                $all=$Image->count();
                $div=4;
                $pages= ceil($all/$div);
                $now=isset($_GET['p'])?$_GET['p']:1;
                $start=($now-1)*$div;
                $rows=$Image->all(" limit $start,$div");
                foreach ($rows as $key => $value) {
                ?>
                <tr>
                    <td width="45%">
                        <img src="img/<?=$value['img'];?>" style="width:160px;height:120px;">
                    </td>
                    <td width="23%">
                        <input type="text" name='text[]' value="<?=$value['text'];?>">
                    </td>
                    <td width="7%">
                        <input type="checkbox" name="sh[]" value="<?=$value['id'];?>" <?=($value['sh']==1)?"checked":"";?>>
                    </td>
                    <td width="7%">
                        <input type="checkbox" name="del[]" value="<?=$value['id'];?>">    
                    </td>
                    <td>
                    <input type="button" 
                        value="更換圖片" onclick="location.href='modal/image_update.php?id=<?=$value['id'];?>'">
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
                echo "<a href='?do=larp_image&p=".($now-1)."'> < </a>";
            }

            for($i=1;$i<=$pages;$i++){
                $fontsize=($now==$i)?'24px':'16px';
                echo "<a href='?do=larp_image&p=$i' style='font-size:$fontsize'> $i </a>";
            }

            if(($now+1)<=$pages){
                echo "<a href='?do=larp_image&p=".($now+1)."'> > </a>";
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
                <h5 class="modal-title" id="modelLable"><?=$hs['larp_image'];?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="api/manage.php" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <table style="margin:auto;">
                        <tr class="mb-3">
                            <td style="text-align:right"><?=$hs['larp_image'];?>：</td>
                            <td style="text-align:right"><input type="file" class="form-control" name="img"></td>
                        </tr>
                        <tr class="mb-3">
                            <td>標題：</td>
                            <td><input type="text" name="text[]"></td>
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
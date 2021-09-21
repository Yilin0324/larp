<div style="width:99%; margin:auto;">
    <h4 class="main-title text-center mt-2"><?=$ts[$do];?></h4>

    <form method="post" action="api/manage.php">
        <table width="100%" class="table table-bordered text-center table-light table-striped align-middle">
            <tbody>
                <tr>
                    <td>圖片</td>
                    <td>標題</td>
                    <td>文字</td>
                    <td width="5%">顯示</td>
                    <td width="5%">刪除</td>
                    <td></td>
                </tr>
                <?php
                    $all=$About->count();
                    $div=5;
                    $pages= ceil($all/$div);
                    $now=isset($_GET['p'])?$_GET['p']:1;
                    $start=($now-1)*$div;
                    $rows=$About->all(" limit $start,$div");
                foreach ($rows as $key => $value) {
                ?>
                <tr>
                    <td>
                        <img src="img/<?=$value['img'];?>" style="width:120px;height:100px;">
                    </td>
                    <td>
                        <input type="text" name='title[]' value="<?=$value['title'];?>">
                    </td>
                    <td>
                        <textarea name="text[]" style="width:90%;height:100px"><?=$value['text'];?></textarea>
                    </td>
                    <td>
                        <input type="radio" name="sh[]" value="<?=$value['id'];?>"
                            <?=($value['sh']==1)?"checked":"";?>>
                    </td>
                    <td>
                        <input type="checkbox" name="del[]" value="<?=$value['id'];?>">
                    </td>
                    <td>
                    <!-- <input type="button" data-bs-toggle="modal" data-bs-target="#updateModel" value="修改" id="<?=$value['id'];?>"> -->
                    <!-- <a href="?id=<?= $value['id'];?>" type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#updateModel">修改</a> -->
                    <input type="button" 
                        value="更換圖片" onclick="location.href='modal/about_update.php?id=<?=$value['id'];?>'">
                        <!-- <input type="button" value="更新圖片" 
                        onclick="op('#cover','#cvr','../modal/about_update.php?id=<?=$value['id'];?>.php')"> -->
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
                echo "<a href='?do=larp_about&p=".($now-1)."'> < </a>";
            }

            for($i=1;$i<=$pages;$i++){
                $fontsize=($now==$i)?'24px':'16px';
                echo "<a href='?do=larp_about&p=$i' style='font-size:$fontsize'> $i </a>";
            }

            if(($now+1)<=$pages){
                echo "<a href='?do=larp_about&p=".($now+1)."'> > </a>";
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
                <h5 class="modal-title" id="modelLable"><?=$hs['larp_about'];?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="api/manage.php" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <table style="margin:auto;">
                        <tr class="mb-3">
                            <td style="text-align:right"><?=$hs['larp_about'];?>：</td>
                            <td style="text-align:right"><input type="file" class="form-control" name="img"></td>
                        </tr>
                        <tr class="mb-3">
                            <td>標題：</td>
                            <td><input type="text" name="title[]"></td>
                        </tr>

                        <tr>
                            <td>文字：</td>
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
<!-- update model -->
<div class="modal fade" id="updateModel" tabindex="-1" aria-labelledby="upmodel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="upmodel"><?=$hs['larp_about'];?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="api/manage.php" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <table style="margin:auto;">
                        <tr class="mb-3">
                            <td style="text-align:right"><?=$hs['larp_about'];?>：</td>
                            <td style="text-align:right"><input type="file" class="form-control" name="img"></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="更新">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
                    <input type="hidden" name='table' value='<?=$do;?>'>
                    <input type="hidden" name="id[]" value="<?=$_GET['id'];?>">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- <script>
    $(document).ready(function(){
        $('input').each(function(){
            alert($(this).attr('id'));
        });
    });
</script> -->

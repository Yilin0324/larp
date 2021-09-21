<div style="width:99%; margin:auto;">
<h4 class="main-title text-center mt-2"><?=$ts[$do];?></h4>
    
    <form method="post" action="api/manage.php">
        <table width="100%" class="table table-bordered text-center table-light table-striped align-middle">
            <tbody>
                <tr>
                    <td>帳號</td>
                    <td>密碼</td>
                    <td width="15%">刪除</td>
                </tr>
            <?php

                $rows=$Admin->all();
                foreach ($rows as $key => $value) {
                ?>
                <tr>
                    <td>
                        <input type="text" name='text[]' value="<?=$value['acc'];?>">
                    </td>
                    <td>
                        <input type="password" name='text[]' value="<?=$value['pw'];?>">
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
                <h5 class="modal-title" id="modelLable"><?=$hs['larp_admin'];?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="api/manage.php" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <table style="margin:auto;">
                        <tr class="mb-3">
                            <td>帳號：</td>
                            <td><input type="text" name="acc[]"></td>
                        </tr>
                        <tr class="mb-3">
                            <td>密碼：</td>
                            <td><input type="password" name="pw[]"></td>
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
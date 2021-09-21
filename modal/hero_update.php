<?php include_once "../base.php";?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- jq -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous"></script>

    <style>
    body{
        background: #666;
    }
    
    </style>
</head>

<body>
    <div class="container mt-5 border border-secondary p-5 bg-light">
        <h2 class="text-center h2">更新背景圖片</h2>
        <hr>
        <form action="../api/upload.php" method="post" enctype="multipart/form-data">
            <table>
            <div class="mb-4">
                <label for="formFile" class="form-label"><?=$hs['larp_hero'];?>:</label>
                <input class="form-control" type="file" id="formFile" name="img">
            </div>
            </table>
            <div class="text-center">
                <input type="submit" class="btn btn-success" value="更新">
                <input type="button" class="btn btn-danger" value="返回" onclick="javascript:history.go(-1);">
                <input type="hidden" name="table" value="larp_hero">
                <input type="hidden" name="id" value="<?=$_GET['id'];?>">
            </div>
        </form>
    </div>
</body>

</html>
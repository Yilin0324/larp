<?php include_once '../base.php';

$db = new DB($_POST['table']);
// unset必要
unset($_POST['table']);
foreach($_POST['id'] as $index => $id){
  $db->find($id);
  

  if(isset($_POST['del']) && in_array($id,$_POST['del'])){
    $db->del($id);
  }else{
    $data = [] ; 
    foreach(array_keys($_POST) as $key){
      // 送過來的key
      if($key != 'del') $data[$key] = $_POST[$key][$index];
    }
    

    if(isset($_POST['sh'])){
      $data['sh'] = in_array($id,$_POST['sh'])? '1' : '0' ;
    }

    if($_FILES){
      $file = $_FILES['img'];
      move_uploaded_file($file['tmp_name'],'../img/'.$file['name']);

      $data['img'] = $file['name'];
    }


    if($data){
      // 針對ID做判斷，有id放id
    if(!$data['id']) unset($data['id']);
      $db->save($data);
    }
    echo "<pre>";
    print_r($data);
    echo "</pre>";
  }
}

to($_SERVER['HTTP_REFERER']);


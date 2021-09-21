<?php
session_start();
date_default_timezone_set("Asia/Taipei");
//設定後台的抬頭文字



$ts=[
        "larp_admin"=>"帳號管理",
        "larp_about"=>"關於我們",
        "larp_hero"=>"主頁內容管理",
        "larp_image"=>"活動照片",
        'larp_link'=>"傳送門管理",
        "larp_news"=>"活動管理",
        "larp_time"=>"更新日期"
    ]; 
$as=[
        "larp_admin"=>"新增管理者帳號",
        "larp_about"=>"新增關於我們",
        "larp_hero"=>"新增主頁內容管理",
        "larp_image"=>"新增活動照片",
        'larp_link'=>"新增傳送門管理",
        "larp_news"=>"新增活動管理",
        "larp_time"=>"新增更新日期"
    ]; 
$hs=[
    "larp_admin"=>"管理者帳號",
    "larp_about"=>"關於我們",
    "larp_hero"=>"主頁內容",
    "larp_image"=>"活動照片",
    'larp_link'=>"傳送門",
    "larp_news"=>"活動資訊",
    "larp_time"=>"更新日期"
    ]; 
class DB{
    private $dsn="mysql:host=localhost;charset=utf8;dbname=db_larp";
    private $root='root';
    private $password='';
    private $table;
    private $pdo;

    public function __construct($table){
        $this->table=$table;
        $this->pdo=new PDO($this->dsn,$this->root,$this->password);
    }

    public function all(...$arg){
        $sql="select * from $this->table ";

        if(isset($arg[0])){
            if(is_array($arg[0])){
                foreach($arg[0] as $key => $value){
                    $tmp[]=sprintf("`%s`='%s'",$key,$value);
                }
                    $sql=$sql . " where " . implode(" && ",$tmp);
            }else{
                $sql=$sql . $arg[0];
            }
            if(isset($arg[1])){
                $sql=$sql . $arg[1];
            }
        }

        // echo $sql;
        return $this->pdo->query($sql)->fetchAll();

    }

    public function count(...$arg){
        $sql="select count(*) from $this->table ";

        if(isset($arg[0])){
            if(is_array($arg[0])){
                foreach($arg[0] as $key => $value){
                    $tmp[]=sprintf("`%s`='%s'",$key,$value);
                }
                    $sql=$sql . " where " . implode(" && ",$tmp);
            }else{
 
                $sql=$sql . $arg[0];
            }

            if(isset($arg[1])){
                 $sql=$sql . $arg[1];
            }
        }

        //echo $sql;
        return $this->pdo->query($sql)->fetchColumn();

    }
    public function find($id){
        $sql="select * from $this->table ";

        
            if(is_array($id)){
                foreach($id as $key => $value){
                    $tmp[]=sprintf("`%s`='%s'",$key,$value);
                }
                    $sql=$sql . " where " . implode(" && ",$tmp);
            }else{
 
                $sql=$sql . " where `id`='$id'";
            }

        // echo $sql;
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

    }
    public function del($id){
        $sql="delete from $this->table ";
            if(is_array($id)){
                foreach($id as $key => $value){
                    $tmp[]=sprintf("`%s`='%s'",$key,$value);
                }
                    $sql=$sql . " where " . implode(" && ",$tmp);
            }else{
 
                $sql=$sql . " where `id`='$id'";
            }

        // echo $sql;
        return $this->pdo->exec($sql);

    }

        //欄位加總的計畫
        public function sum($col){
            $sql="select sum(`$col`) from $this->table";
    
            return $this->pdo->query($sql)->fetchColumn();
        }

    public function save($array){
        if(isset($array['id'])){
            //update
                foreach($array as $key => $value){
                    if($key!='id'){
                        $tmp[]=sprintf("`%s`='%s'",$key,$value);
                    }
                }

            $sql="update $this->table set ".implode(',',$tmp)." where `id`='{$array['id']}'";
        }else{
            //insert
            // `name`,`addr`,`tel`
            $sql="insert into $this->table 
                    (`".implode("`,`",array_keys($array))."`) values
                    ('".implode("','",$array)."')";
        }

        // echo $sql;
        return $this->pdo->exec($sql);
    }

}

$About=new DB('larp_about');
$Hero=new DB('larp_hero');
$Admin=new DB('larp_admin');
$Image=new DB('larp_image');
$Link=new DB('larp_link');
$News=new DB('larp_news');
$Time=new DB('larp_time');
$Total=new DB('larp_total');


//判斷是否要新增當日的資料
if($Total->count(['date'=>date("Y-m-d")])<=0){
    $Total->save(['date'=>date("Y-m-d"),'total'=>0]);
};

//判斷是否要增加session
if(!isset($_SESSION['total'])){
    $todayTotal=$Total->find(['date'=>date("Y-m-d")]);
    $todayTotal['total']++;
    $Total->save($todayTotal);
    $_SESSION['total']=1;
}


function to($url){
    header("location:".$url);
}



?>
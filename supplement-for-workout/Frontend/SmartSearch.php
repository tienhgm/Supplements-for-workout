<?php
    //load file Connection.php
    include "../Application/Connection.php";
    //lay bien truyen tu url
    $key= isset($_GET["key"]) ? $_GET["key"] : "";
    //lay bien ket noi
    $conn= Connection::getInstance();
    $query= $conn->query("select id, name, photo from products where name like '%$key%'");
    //lay tat ca gia tri tra ve
    $result = $query->fetchAll();
    $strResult= "";
    foreach($result as $rows){
        $strResult= $strResult."<li><img src='../Assets/Upload/Products/".$rows->photo."'><a href='index.php?controller=products&action=detail&id=".$rows->id."'>".$rows->name."</a></li>";
    }
    echo $strResult;
    //--
    
?>
<?php

    function getFilePaths(){
        //file paths
        $myArr = array("E:/Apiit/2nd year/testfile.pdf", "E:/Apiit/file/cd/edit.pdf", "E:/Apiit/file/cd/new/pro.pdf");

        //create json arry and passed
        echo json_encode($myArr);

    }

    if(isset($_GET['getFilePaths'])){
        getFilePaths();
    }

?>
<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $memberID = $_SESSION['memberID'];
    $blogAuthor = $_SESSION['youName'];                     //작성자

    $blogCategory = $_POST['blogCategory'];                 //카테고리
    $blogTitle = $_POST['blogTitle'];                       //제목
    $blogContents = nl2br($_POST['blogContents']);          //내용

    $blogView = 1;                                          //조회수
    $blogLike = 0;                                          //좋아요
    $regTime = time();

    $blogImgFile = $_FILES['blogFile'];                     //이미지 파일
    $blogImgSize = $_FILES['blogFile']['size'];             
    $blogImgType = $_FILES['blogFile']['type'];              
    $blogImgName = $_FILES['blogFile']['name'];              
    $blogImgTmp = $_FILES['blogFile']['tmp_name'];              

    // echo"<pre>";
    // var_dump($blogImgFile);
    // echo"</pre>";

    // 이미지 파일명 확인
    if($blogImgType){
        $fileTypeExtension = explode("/", $blogImgType);
        $fileType = $fileTypeExtension[0];               //image
        $fileTypeExtension = $fileTypeExtension[1];      //jpeg

        //이미지 타입 확인
        if($fileType == "image"){
            if($fileTypeExtension == "jpg" || $fileTypeExtension == "jpeg" || $fileTypeExtension == "png" || $fileTypeExtension == "gif"){
                $blogImgDir = "../assests/blog/";
                $blogImgName = "Img_".time().rand(1,99999)."."."{$fileExtension}";

                echo "이미지 파일이 맞습니다.";
                $sql = "INSERT INTO blog(memberID, blogTitle, blogContents, blogCategory, blogAuthor, blogView, blogLike, blogImgFile, blogImgSize, blogDelete, blogRegTime) VALUES('$memberID', '$blogTitle', '$blogContents', '$blogCategory', '$blogAuthor', '$blogView', '$blogLike', '$blogImgName', '$blogImgSize', '0', '$regTime')";
            } else {
                echo "<script>alert('이미지 파일이 아닙니다.')</script>";
            }
        } else {
            echo "<script>alert('이미지 파일이 아닙니다.')</script>";
        }
    } else {
        echo "이미지 파일을 첨부하지 않았습니다.";
        $sql = "INSERT INTO blog(memberID, blogTitle, blogContents, blogCategory, blogAuthor, blogView, blogLike, blogImgFile, blogImgSize, blogDelete, blogRegTime) VALUES('$memberID', '$blogTitle', '$blogContents', '$blogCategory', '$blogAuthor', '$blogView', '$blogLike', 'Img_default.jpg', '$blogImgSize', '0', '$regTime')";
    }

    //이미지 사이즈 확인
    if($blogImgSize > 10000000){
        echo "<script>alert('이미지 파일 용량이 1메가를 초과했습니다.')</script>";
    }

    $result = $connect -> query($sql);
    $result = move_uploaded_file($blogImgTmp, $blogImgDir.$blogImgName);

    Header("Location: blog.php");
    
?>
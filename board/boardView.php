<?php
    include "../connect/connect.php" ;
    include "../connect/session.php" ;

    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>게시판</title>
        <?php include "../include/head.php" ?>
    </head>
    <body class="gray">
        <?php include "../include/skip.php" ?>
        <!-- //skip -->
        <?php include "../include/header.php" ?>
        <!-- //header -->
        <main id="main" class="container">
        <div class="intro__inner center">
            <picture class="intro__images">
                <source srcset="../assets/img/board01.png, ../assets/img/board01@2x.png 2x, ../assets/img/board01@3x.png 3x" />
                <img src="../assets/img/board01.png" alt="회원가입 이미지">
            </picture>
            <h2> 게시판</h2>
            <p class="intro__text">
                웹디자이너, 웹퍼블리셔,프론트엔드 개발자를 위한 게시판입니다.<br>
                관련된 문의사항은 여기서 확인하세요.
            </p>
        </div>
       <!-- intro__inner -->
       <div class="board__inner">
            <div class="board__view">
                <table>
                    <colgroup>
                        <col style="width: 20%">
                        <col style="width: 80%">
                    </colgroup>
                    <tbody>
                        <!-- <tr>
                            <th>제목</th>
                            <td>게시판 제목입니다.</td>
                        </tr>
                        <tr>
                            <th>등록자</th>
                            <td>천설희</td>
                        </tr>
                        <tr>
                            <th>등록일</th>
                            <td>2023.03.13</td>
                        </tr>
                        <tr>
                            <th>조회수</th>
                            <td>999</td>
                        </tr>
                        <tr>
                            <th>내용</th>
                            <td> 프론트 앤드 개발자 취업 노하우<br><br><br>
                                1.기술 스택을 탄탄하게 다지기: 프론트 엔드 개발자는 HTML, CSS, JavaScript를 비롯한 웹 기술에 대한 전문
                                지식이 필요합니다. 이를 위해 학교, 온라인 코스, 도서관 등에서 관련 자료를 찾아 학습하는 것이 좋습니다. 또한, 최신 웹 개발 트렌드에 대해
                                관심을 가지고 항상 업데이트된 기술을 습득하는 것이 중요합니다.<br><br>
                                2.개인 프로젝트 작업: 개인 프로젝트를 만들면 포트폴리오를 구성하는 데 도움이 됩니다. 이를 통해 취업 시 실제로 문제를
                                해결할 수 있는 능력을 입증할 수 있으며, 스킬셋을 증명하는작업물을 갖출 수 있습니다.<br><br>
                                3.오픈소스 프로젝트 참여: 오픈소스 프로젝트에 참여함으로써 다른 개발자들과 협력하는 경험을 쌓을 수 있습니다.
                                이는 개발자의 커뮤니케이션 능력을 향상시키며, 실제로 사용되는 코드를 작성해볼 수 있는 기회가 됩니다.<br><br>
                                4.커뮤니케이션 능력 강화: 개발자는 협업을 해야 합니다. 따라서, 원활한 의사소통 능력은 매우 중요합니다.
                                이를 위해 커뮤니케이션 능력을 강화하고, 다른 개발자나 비전공자와의 대화에서 기술적인 내용을 이해할 수 있도록 노력해야 합니다.<br><br>
                                5.이력서와 포트폴리오 업데이트: 이력서와 포트폴리오는 프론트 엔드 개발자 채용 시 큰 역할을 합니다.
                                이를 업데이트하고, 채용 기업이 원하는 스킬셋에 부합하는 작업물을 포함하도록 하는 것이 좋습니다.
                            </td>
                        </tr> -->

<?php
    $boardID = isset($_GET['boardID']) ? $_GET['boardID'] : '';

    //보드 뷰 + 1
    $sql = "UPDATE board SET boardView = boardView + 1 WHERE boardID = {$boardID}";
    $connect -> query($sql);

    // echo $boardID;
    $sql = "SELECT b.boardContents, b.boardTitle, m.youName, b.regTime, b.boardView FROM board b JOIN members m ON(m.memberID = b.memberID) WHERE b.boardID = {$boardID}";
    $result = $connect -> query($sql);
    if($result){
        $info = $result -> fetch_array(MYSQLI_ASSOC);
        echo "<tr><th>제목</th><td>".$info['boardTitle']."</td></tr>";
        echo "<tr><th>등록자</th><td>".$info['youName']."</td></tr>";
        echo "<tr><th>등록일</th><td>".date('Y-m-d', $info['regTime'])."</td></tr>";
        echo "<tr><th>조회수</th><td>".$info['boardView']."</td></tr>";
        echo "<tr><th>내용</th><td>".$info['boardContents']."</td></tr>";
    } else {
        echo "<tr><td colspan='4'>게시글이 없습니다.</td></tr>";
    }
?>
                    </tbody>
                </table>
            </div>
            <div class="board__btn mb100">
                <a href="boardModify.php?boardID=<?=$_GET['boardID']?>" class="btnStyle3">수정하기</a>
                <a href="boardRemove.php?boardID=<?=$_GET['boardID']?>" class="btnStyle3" onclick="return confirm('정말 삭제하시겠습니까?')">삭제하기</a>
                <a href="board.php" class="btnStyle3">목록보기</a>
            </div>
        </div>
    </main>
    <!-- //main -->
    <?php include "../include/footer.php" ?>
    <!-- //footer -->
    </body>
</html>
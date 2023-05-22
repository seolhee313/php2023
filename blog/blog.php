<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>블로그</title>

    <?php include "../include/head.php" ?>
</head>
<body class="gray">
    
    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main"  class="container">
        <div class="blog__search bmStyle">
            <h2>개발자 블로그 입니다.</h2>
            <p>노력과 열정은 결국 좋은 결과를 가져온다고 믿습니다.</p>
            <div class="search">
                <form action="#" name="#" method="POST">
                    <legend class="blind">블로그 검색</legend>
                    <input type="search" class="inputStyle2" name="searchKeyword" aria-label="검색" placeholder="검색어를 입력하세요!">
                    <button type="submit" class="btnStyle4">검색하기</button>
                    <?php if(isset($_SESSION['memberID'])){ ?>
                            <div class="mt20"><a href="blogWrite.php" class="btnStyle4 white">글쓰기</a></div>
                    <?php } ?>
                </form>
            </div>
        </div>
        <div class="blog__inner">
            <div class="left">
                <div class="blog__wrap">
                    <h2>All Posts</h2>
                    <div class="cards__inner col3 line3">
                        <!-- <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog01-min.jpg, ../assets/img/blog01-min.jpg, ../assets/img/blog01-min@2x.jgp 2x, ../assets/img/blog01-min@3x.jgp 3x" />
                                <img src="../assets/img/blog01-min.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>Python으로 데이터 시각화하기: Matplotlib 사용법</h3>
                                <p>이 글에서는 Python의 Matplotlib 라이브러리를 사용하여 데이터 시각화하는 방법을 설명합니다. 코드 예제와 함께 간단한 그래프부터 복잡한 그래프까지 다양한 시각화 기법을 다룹니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="author">천설희</span>
                                <span class="date">2023.04.03</span>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog02-min.jgp, ../assets/img/blog02-min.jgp, ../assets/img/blog02-min@2x.jgp 2x, ../assets/img/blog02-min@3x.jgp 3x" />
                                <img src="../assets/img/blog02-min.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>React에서 Redux를 사용하는 방법</h3>
                                <p>이 글에서는 React 애플리케이션에서 Redux를 사용하여 상태를 관리하는 방법을 설명합니다. Redux의 기본 개념부터 간단한 예제까지 다룹니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="author">천설희</span>
                                <span class="date">2023.04.03</span>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog03-min.jgp, ../assets/img/blog03-min.jgp, ../assets/img/blog03-min@2x.jgp 2x, ../assets/img/blog03-min@3x.jgp 3x" />
                                <img src="../assets/img/blog03-min.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>Node.js와 Express로 RESTful API 만들기</h3>
                                <p>이 글에서는 Node.js와 Express를 사용하여 RESTful API를 만드는 방법을 설명합니다. 코드 예제와 함께 HTTP 요청 및 응답을 처리하는 방법, 데이터베이스 연동 등을 다룹니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="author">천설희</span>
                                <span class="date">2023.04.03</span>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog03-min.jgp, ../assets/img/blog03-min.jgp, ../assets/img/blog03-min@2x.jgp 2x, ../assets/img/blog03-min@3x.jgp 3x" />
                                <img src="../assets/img/blog04-min.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>Node.js와 Express로 RESTful API 만들기</h3>
                                <p>이 글에서는 Node.js와 Express를 사용하여 RESTful API를 만드는 방법을 설명합니다. 코드 예제와 함께 HTTP 요청 및 응답을 처리하는 방법, 데이터베이스 연동 등을 다룹니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="author">천설희</span>
                                <span class="date">2023.04.03</span>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog03-min.jgp, ../assets/img/blog03-min.jgp, ../assets/img/blog03-min@2x.jgp 2x, ../assets/img/blog03-min@3x.jgp 3x" />
                                <img src="../assets/img/blog05-min.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>Node.js와 Express로 RESTful API 만들기</h3>
                                <p>이 글에서는 Node.js와 Express를 사용하여 RESTful API를 만드는 방법을 설명합니다. 코드 예제와 함께 HTTP 요청 및 응답을 처리하는 방법, 데이터베이스 연동 등을 다룹니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="author">천설희</span>
                                <span class="date">2023.04.03</span>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog03-min.jgp, ../assets/img/blog03-min.jgp, ../assets/img/blog03-min@2x.jgp 2x, ../assets/img/blog03-min@3x.jgp 3x" />
                                <img src="../assets/img/blog06-min.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>Node.js와 Express로 RESTful API 만들기</h3>
                                <p>이 글에서는 Node.js와 Express를 사용하여 RESTful API를 만드는 방법을 설명합니다. 코드 예제와 함께 HTTP 요청 및 응답을 처리하는 방법, 데이터베이스 연동 등을 다룹니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="author">천설희</span>
                                <span class="date">2023.04.03</span>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog03-min.jgp, ../assets/img/blog03-min.jgp, ../assets/img/blog03-min@2x.jgp 2x, ../assets/img/blog03-min@3x.jgp 3x" />
                                <img src="../assets/img/blog07-min.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>Node.js와 Express로 RESTful API 만들기</h3>
                                <p>이 글에서는 Node.js와 Express를 사용하여 RESTful API를 만드는 방법을 설명합니다. 코드 예제와 함께 HTTP 요청 및 응답을 처리하는 방법, 데이터베이스 연동 등을 다룹니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="author">천설희</span>
                                <span class="date">2023.04.03</span>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="assets/img/blog03-min.jgp, ../assets/img/blog03-min.jgp, ../assets/img/blog03-min@2x.jgp 2x, ../assets/img/blog03-min@3x.jgp 3x" />
                                <img src="../assets/img/blog01-min.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>Node.js와 Express로 RESTful API 만들기</h3>
                                <p>이 글에서는 Node.js와 Express를 사용하여 RESTful API를 만드는 방법을 설명합니다. 코드 예제와 함께 HTTP 요청 및 응답을 처리하는 방법, 데이터베이스 연동 등을 다룹니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="author">천설희</span>
                                <span class="date">2023.04.03</span>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog03-min.jgp, ../assets/img/blog03-min.jgp, ../assets/img/blog03-min@2x.jgp 2x, ../assets/img/blog03-min@3x.jgp 3x" />
                                <img src="../assets/img/blog02-min.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>Node.js와 Express로 RESTful API 만들기</h3>
                                <p>이 글에서는 Node.js와 Express를 사용하여 RESTful API를 만드는 방법을 설명합니다. 코드 예제와 함께 HTTP 요청 및 응답을 처리하는 방법, 데이터베이스 연동 등을 다룹니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="author">천설희</span>
                                <span class="date">2023.04.03</span>
                            </div>
                        </div> -->
<?php
    $sql = "SELECT * FROM blog WHERE blogDelete = 0 ORDER BY blogID DESC";
    $result = $connect -> query($sql);
?>

<?php foreach($result as $blog){ ?>
    <div class="card">
        <figure class="card__img">
            <a href="blogView.php?blogID=<?=$blog['blogID']?>">
                <img src="../assets/blog/<?=$blog['blogImgFile']?>" alt="<?=$blog['blogTitle']?>">
            </a>
        </figure>
        <div class="card__title">
            <h3><?=$blog['blogTitle']?></h3>
            <p><?=$blog['blogContents']?></p>
        </div>
        <div class="card__info">
            <span class="author">천설희</span>
            <span class="date">2023.04.03</span>
            <!-- <a href="#" class="more">더보기</a> -->
        </div>
    </div>
<?php } ?>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="blog__aside">
                    <div class="blog__aside">
                        <?php include "../include/blogTitle.php" ?>
                        
                        <?php include "../include/blogCate.php" ?>

                        <?php include "../include/blogNew.php" ?>

                        <?php include "../include/blogPopular.php" ?>

                        <?php include "../include/blogComment.php" ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

</body>
</html>
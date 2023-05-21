<div class="cate">
    <h4>인기 글</h4>
    <ul class="popular-post-list">
        <?php
        $popularSql = "SELECT * FROM blog WHERE blogDelete = 0 ORDER BY blogView DESC LIMIT 5";
        $popularResult = $connect->query($popularSql);

        if ($popularResult && $popularResult->num_rows > 0) {
            while ($popularRow = $popularResult->fetch_assoc()) {
                $blogID = $popularRow['blogID'];
                $blogTitle = $popularRow['blogTitle'];

                echo '<li><a href="blogView.php?blogID='.$blogID.'">'.$blogTitle.'</a></li>';
            }
        } else {
            echo '<li>인기 글이 없습니다.</li>';
        }
        ?>
    </ul>
</div>
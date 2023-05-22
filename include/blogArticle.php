<div class="cards__inner col4 line0">
    <?php
    $category = $blogInfo['blogCategory'];

    $relatedSql = "SELECT * FROM blog WHERE blogCategory = '$category' AND blogID != '$blogID' LIMIT 4";
    $relatedResult = $connect->query($relatedSql);

    if ($relatedResult && $relatedResult->num_rows > 0) {
        while ($relatedRow = $relatedResult->fetch_assoc()) {
            $relatedBlogID = $relatedRow['blogID'];
            $relatedBlogTitle = $relatedRow['blogTitle'];
            $relatedBlogImgFile = $relatedRow['blogImgFile'];

            $imagePath = "../assets/blog/".$relatedBlogImgFile;
            $imageSrcset = $imagePath.", ".$imagePath."@2x.jpg 2x, ".$imagePath."@3x.jpg 3x";

            echo '
            <div class="card">
                <figure class="card__img">
                    <source srcset="'.$imageSrcset.'" />
                    <a href="blogView.php?blogID='.$relatedBlogID.'" class="more"><img src="'.$imagePath.'" alt="사진"></a>
                </figure>
                <div class="card__title">
                    <h3>'.$relatedBlogTitle.'</h3>
                </div>
            </div>';
        }
    } else {
        echo '<p>관련글이 없습니다.</p>';
    }
    ?>
</div>
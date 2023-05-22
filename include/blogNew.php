<!-- <div class="cate">
  <h4>최신 글</h4>
  <ul class="latest-post-list">
<?php
    // $latestSql = "SELECT * FROM blog WHERE blogDelete = 0 ORDER BY blogID DESC LIMIT 5";
    // $latestResult = $connect->query($latestSql);

    // if ($latestResult->num_rows > 0) {
    //   while ($latestRow = $latestResult->fetch_assoc()) {
    //     $blogID = $latestRow['blogID'];
    //     $blogTitle = $latestRow['blogTitle'];

    //     echo '<li><a href="blogView.php?blogID='.$blogID.'">'.$blogTitle.'</a></li>';
    //   }
    // } else {
    //   echo '<li>최신 글이 없습니다.</li>';
    // }
?>
  </ul>
</div> -->

<div class="cate list2">
  <h4>최신 글</h4>
  <ul>
    <?php
      $blogNew = "SELECT * FROM blog WHERE blogDelete = 0 ORDER BY blogID DESC LIMIT 4";
      $blogNewResult = $connect->query($blogNew);

      foreach($blogNewResult as $blog){ ?>
        <li>
          <a href="blogView.php?blogID=<?$blog['blogID']?>">
            <img src="../assets/blog/<?=$blog['blogImgFile']?>" alt="<?=$blog['blogTitle']?>">
            <span><?=$blog['blogTitle']?></span>
          </a>
        </li>
      <?php }
    ?>
  </ul>
</div>
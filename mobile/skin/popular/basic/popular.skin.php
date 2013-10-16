<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가 
?>

<link rel="stylesheet" href="<?php echo $popular_skin_url ?>/style.css">

<aside id="popular">
    <div>
        <h2>인기검색어</h2>
        <ul>
        <?php for ($i=0; $i<count($list); $i++) { ?>
            <li><a href="<?php echo G5_BBS_URL ?>/search.php?sfl=wr_subject&amp;sop=and&amp;stx=<?php echo urlencode($list[$i]['pp_word']) ?>"><?php echo $list[$i]['pp_word'] ?></a></li>
        <?php } ?>
        </ul>
    </div>
</aside>
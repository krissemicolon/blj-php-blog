<h2>Latest Posts: </h2>

<?php foreach($rows as $row): ?>
<div class="container" id="post-container">
    <div class="post">
    <h3 class="post-header"><?=$row["post_title"]?></h3>
    <p class="post-text"><?=$row["post_text"]?></p>
        <p class="post-footer">Created by: <?=$row["created_by"]?> Date: 10:28 26/11/2020</p>
    </div>
</div>
<?php endforeach; 
?>
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

<div class="container" id="post-container">
    <div class="post">
        <h3 class="post-header">Example Title</h3>
        <p class="post-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porta blandit massa ac auctor. Vestibulum eu est dictum, pretium nunc ultrices, eleifend tellus. Donec sit amet metus et nisi tincidunt dictum. Integer sodales, metus in scelerisque tincidunt, libero purus facilisis eros, eget accumsan sem lorem quis leo. Nulla est tellus, rutrum ac quam ut, laoreet scelerisque purus. Praesent ex turpis, bibendum auctor ex et, mollis accumsan nisi. Donec scelerisque lorem eu eros pulvinar, vel eleifend enim sodales. Vivamus viverra mauris at pretium iaculis. Sed maximus nunc mauris, eu laoreet lacus tristique eu. Vivamus ullamcorper, justo vel venenatis aliquam, orci tellus eleifend erat, eget accumsan turpis ex eu lorem. Aliquam sit amet pharetra nulla. Praesent cursus imperdiet tortor a tincidunt.</p>
        <p class="post-footer">Created by: USER Date: DATE</p>
    </div>
</div>

<?php

function listWrapper($content){
    echo '<li>' . $content . '.</li>';
}
?>

<h1>My List of Posts</h1>
<ul>
<? foreach($posts as $post) : ?>
    <li><?= $post->post_title ?>
        <div><?= $post->post_content ?></div>
    </li>
<? endforeach ?>
</ul>






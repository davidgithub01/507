<h1>My List of Posts</h1>
<ul>
    <? while (have_posts()) : the_post(); ?>
        <li><?php the_title() ?></li>
        <?php the_content() ?>
    <? endwhile ?>
</ul>
        
        


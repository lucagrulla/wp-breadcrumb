<nav>
  <ul class="breadcrumb">
  <li><a href="/">Home</a></li>
  <?php 
  $foo = get_post_ancestors($post);
  $an = array_reverse($foo);

    foreach($an as $page) {?>
   <li>
     <a href="<?php echo get_permalink($page); ?>">
     <?php echo get_the_title($page); ?>
     </a>
   </li>
  <?php };?>
  <li>
    <a href="/foo"><?php echo get_the_title($post->id) ?></a>
  </li>
  </ul>
</nav>

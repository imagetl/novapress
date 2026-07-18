<?php
get_header();
?>

<main class="site-main">
<h1>Page Template</h1>

<?php
while(have_posts()):

the_post();

the_content();

endwhile;
?>

</main>

<?php
get_footer();
<?php
//Class 25.18

get_header();
the_post();
the_content();
//Class 25.19
echo "<hr/>";
echo get_transient('hello');
echo "<hr/>";
echo "<hr/>";
echo get_transient('tran2');
echo "<hr/>";
//End of Class 25.19
get_footer();
?>
<?php
	 $results = $wpdb->get_results($wpdb->prepare(
               "SELECT * FROM `wp_my_podpiski`"));
echo $results;
?>
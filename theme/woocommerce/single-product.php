<?php
if (! defined('ABSPATH')) {
	exit;
}
get_header();

require_once get_template_directory() . "/src/pages/Catalog/Single/index.php";

get_footer('shop');
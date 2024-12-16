<?php
class Help
{
    static function getNumber($num, $clear = false)
    {
        $arr = $clear ? [' ', '(', ')', '-', '+', '–'] : [' ', '(', ')', '-', '–'];
        return str_replace($arr, '', $num);
    }

    static function getLinkPageById($page_id)
    {
        if (empty($page_id) || !is_numeric($page_id)) {
            return null;
        }

        $page_link = get_permalink($page_id);

        if (!$page_link) {
            return null;
        }

        return $page_link;
    }

    static function getLinkArchiveByPostType($postType)
    {
        $archive_link = get_post_type_archive_link($postType);

        if ($archive_link) {
            return esc_url($archive_link);
        } else {
            return null;
        }
    }

    static function isChildForPage(int $pageId)
    {
        global $post;

        if (isset($post) && is_page()) {
            $parent_id = $post->post_parent;

            return $parent_id === $pageId;
        }
    }

    static function getCard($card, $arg = [])
    {
        get_template_part("templates/card", $card, $arg);
    }

    static function getChildPageById($pageId = null)
    {
        $id = $pageId ?? get_the_ID();

        $child_pages = get_children([
            'post_parent' => $id,
            'post_type'   => 'page',
            'post_status' => 'publish',
            'numberposts' => -1,
        ]);

        return $child_pages;
    }

    static function theNav($class = '')
    {
        wp_nav_menu([
            'menu'            => 'Главное',
            'container'       => 'nav',
            'container_class' => $class,
            'menu_class'      => 'menu',
        ]);
    }

    static function isCurrentUrl($url)
    {
        $current_url = home_url($_SERVER['REQUEST_URI']);
        return $current_url === $url;
    }
}

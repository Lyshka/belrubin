<?php
$pagination_args = [
    'prev_text' => '<svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.4 2.79922L11.8 1.19922L1 11.9992L11.8 22.7992L13.4 21.1992L4.2 11.9992L13.4 2.79922Z" fill="#605EB3" />
            </svg>',
    'next_text' => '<svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.599999 21.2008L2.2 22.8008L13 12.0008L2.2 1.20078L0.599998 2.80078L9.8 12.0008L0.599999 21.2008Z" fill="#605EB3" />
            </svg>',
    'mid_size' => 1,
];
?>

<nav id="pagination">
    <?= paginate_links($pagination_args); ?>
</nav>
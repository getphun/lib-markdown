<?php
/**
 * lib-markdown config file
 * @package lib-markdown
 * @version 0.0.1
 * @upgrade true
 */

return [
    '__name' => 'lib-markdown',
    '__version' => '0.0.1',
    '__git' => 'https://github.com/getphun/lib-markdown',
    '__files' => [
        'modules/lib-markdown' => ['install','remove','update']
    ],
    '__dependencies' => [],
    '_services' => [],
    '_autoload' => [
        'classes' => [
            'Michelf\\Markdown'             => 'modules/lib-markdown/third-party/Michelf/Markdown.php',
            'Michelf\\MarkdownExtra'        => 'modules/lib-markdown/third-party/Michelf/MarkdownExtra.php',
            'Michelf\\MarkdownInterface'    => 'modules/lib-markdown/third-party/Michelf/MarkdownInterface.php'
        ],
        'files' => []
    ]
];
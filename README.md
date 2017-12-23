# lib-markdown

Phun library of [PHP Markdown](https://michelf.ca/projects/php-markdown/).

```php
use Michelf\Markdown;
$my_html = Markdown::defaultTransform($my_text);
```

## PREG_JIT_STACKLIMIT_ERROR Error 

Di PHP 7.0.0 <, Markdown parser kadang error, pastikan set `pcre.jit=0` di php.ini.

## Copyright and License

PHP Markdown Lib Copyright © 2004-2015 Michel Fortin [https://michelf.ca/](https://michelf.ca/)
All rights reserved.

Based on Markdown
Copyright © 2003-2005 John Gruber [https://daringfireball.net/](https://daringfireball.net/)
All rights reserved.
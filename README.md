
## Exemple

```
<?php
require_once __DIR__.'/vendor/autoload.php';

use BotInstagramGetPosts\Services\Page\instaPageService;

$ts= new instaPageService();
## limit post
print_r($ts->requestPage('https://www.instagram.com/patoacademy/','key here',2));
## all Posts
print_r($ts->requestPage('https://www.instagram.com/patoacademy/','key here'));```
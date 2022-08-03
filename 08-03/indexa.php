<?php

$episodeSearch = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
preg_match('/\d/',$episodeSearch,$m);
echo $m[0];
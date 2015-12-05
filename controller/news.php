<?php

require __DIR__ . '/../model/News.php';

$news = new News();

$news_list = $news->getAll ();

include __DIR__ . '/../view/news.php';


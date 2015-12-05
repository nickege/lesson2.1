<?php

require __DIR__ . '/../model/News.php';

$items = News::getAll ();

include __DIR__ . '/../view/news.php';


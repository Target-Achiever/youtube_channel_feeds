<?php

$channel_id = 'UC-KcyBCmvH1ssfJbWdaTaRw';

$feed_link = 'https://www.youtube.com/feeds/videos.xml?channel_id='.$channel_id;

$feed_data = json_encode(simplexml_load_string(file_get_contents($feed_link)));
$feed_array = json_decode($feed_data,TRUE);

foreach (array_slice(array_reverse($feed_array['entry']),0,10) as $key => $value) {
    echo $value['title'];
}
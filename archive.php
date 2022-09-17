<?php
$random = "https://zhblogs.ohyee.cc/api/blogs/random";
$json = file_get_contents($random);
$data = json_decode($json,true);
while($i<=9)
{
    $to = "https://zh-blogs.icodeq.com/page_archive?url=".$data["data"][$i]["url"];
    $crawl = file_get_contents($to);
    $i++;
    sleep(1);
}
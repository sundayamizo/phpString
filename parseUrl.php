<?php
// define URL
$url = "http://www.sundayamizo.in:80/blog/article.php?id=79 &page=2";
// parse URL into associative array
$parse = parse_url($url);
// print URL components
foreach ($parse as $k=>$v) {
echo "$k: $v <br/>";
}
?>

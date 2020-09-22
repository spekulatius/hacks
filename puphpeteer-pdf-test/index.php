<?php

require 'vendor/autoload.php';

use Nesk\Puphpeteer\Puppeteer;

$url = 'https://startupnamecheck.com/blog/how-to-make-the-most-of-your-articles';
$file_path = '/tmp/test.pdf';


$puppeteer = new Puppeteer();

$browser = $puppeteer->launch([
    "ignoreHTTPSErrors"     => true,
    "args"                  => ['--no-sandbox', '--disable-setuid-sandbox']
]);

$page = $browser->newPage();

$page->goto($url, ["waitUntil" => "networkidle0"]);

$buffer = $page->pdf([
    "path"                  => $file_path,
    "format"                => "A4"
);

$browser->close();

<?php

require 'vendor/autoload.php';

// Instantiate the library
$web = new \spekulatius\phpscraper();

// Navigate to the test page.
$web->go($argv[1]);

// Extract the links
$links = $web->linksWithDetails;

// Write the result
file_put_contents('./links.json', json_encode($links));

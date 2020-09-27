<?php

list($script, $file, $identifier) = $argv;

$content = file_get_contents($file);

$result = [];
foreach (explode("\n", $content) as $json) {
    $data = json_decode($json, true);

    // Get the URL and redirect keys from it.
    if (preg_match('/'.$identifier.'/', $data['url'])) {
        $result[] = $data['url'];
    }
    if (isset($data['redirect']) && preg_match('/'.$identifier.'/', $data['redirect'])) {
        $result[] = $data['redirect'];
    }
}

file_put_contents(
    $file . '-' . preg_replace('/[^a-z]/', '', $identifier),
    join("\n", array_unique($result)),
    FILE_APPEND
);

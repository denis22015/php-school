<?php

$options = getopt("u:", ["url:"]);

$inputUrl = array_pop($options);

if (!$inputUrl) {
    $inputUrl = $argv[1];
}

echo 'input url: ' . $inputUrl . PHP_EOL;

$parsedUrl = parse_url($inputUrl);

$TLD = ['com', 'org'];

//get extension
preg_match('/\.\w*\w$/', $parsedUrl['path'], $match) .  PHP_EOL;
if (count($match)) {
    $parsedUrl['extension'] = substr($match[0], 1);
}

// get resource
$pathArray = explode('/', $parsedUrl['path']);
$resource = $pathArray[count($pathArray) - 1];
if ($resource) {
    $parsedUrl['resource'] = $pathArray[count($pathArray) - 1];
}

$hostArray = explode('.', $parsedUrl['host']);

$parsedUrl['subdomain'] = $hostArray[ 0 ];
$parsedUrl['domain'] = $hostArray[ 1 ];
$parsedUrl['tdl'] = implode('.', array_splice( $hostArray, 2));


//fragment= hash
foreach ($parsedUrl as $key => $value) {
    echo $key . '= ' . $value . PHP_EOL;
};

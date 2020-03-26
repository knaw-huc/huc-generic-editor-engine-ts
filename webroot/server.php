<?php

// $file = file_get_contents("json_examples/timbuctoo_edit_metadata.json");

// uncomment the line below for a .json file with new features, in development

// $file = file_get_contents("json_examples/voorbeeld.json");

// $file = file_get_contents("json_examples/devdata.json");
$file = file_get_contents("json_examples/translatin.json");

// $file = file_get_contents("json_examples/test.json");
// $file = file_get_contents("json_examples/voorbeeld.json");
// $file = file_get_contents("json_examples/smalltest.json");


header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
echo $file;
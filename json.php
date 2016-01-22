<?php
header('Access-Control-Allow-Origin:*');
header("Content-Type: text/javascript; charset=utf-8");

$json = array(
  "hoge" => "foo"
);

echo json_encode(
    $json,
      JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP
    );

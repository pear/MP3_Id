<?php
require 'MP3/Id.php';

$mp3 = new MP3_Id(true);

$data = $mp3->read(dirname(__FILE__) . '/test.mp3');

$expected = array(
  "TAG" => "TAG", 
  "NAME" => "Test track", 
  "ARTISTS" => "Test",
  "ALBUM" => "The Tests Unplugged",
  "YEAR" => "2955",
  "COMMENT" => "Test comment",
  "TRACK" => 1,
  "GENRENO" => 74,
  "GENRE" => "Acid Jazz"
);

foreach ($expected as $key => $value) {
  assert($value === $data[$key], "Expected $value but got $data[$key]");
  if ($value !==  $data[$key]) {
    var_dump($value);
    var_dump($data[$key]);
  }
}
var_dump($data);
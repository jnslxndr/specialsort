<?php
include '../lib/minitest/src/MiniSpec/autoload.php';
include '../src/specialsort.php';

describe("Testing correctly sorted Umalute", function(){
  it("Sorts values correctly", function() {
    $source = array("Ügistan","Deutschland","Dänemark","italien","Israel","ömröm","Ägypten");
    $target = array("Ägypten","Dänemark","Deutschland","Israel","italien","ömröm","Ügistan");
    specialsort($source);
    expect(array_values($source))->toBe(array_values($target));
  });
  it("Sorts correctly with keys", function() {
    $source = array("UE"=>"Ügistan","DE"=>"Deutschland","DK"=>"Dänemark","I"=>"italien","IS"=>"Israel","OE"=>"ömröm","E"=>"Ägypten");
    $target = array("E"=>"Ägypten","DK"=>"Dänemark","DE"=>"Deutschland","IS"=>"Israel","I"=>"italien","OE"=>"ömröm","UE"=>"Ügistan");
    specialsort($source);
    expect($source)->toBe($target);
  });
});

?>
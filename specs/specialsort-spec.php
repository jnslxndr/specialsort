<?php
include '../lib/minitest/src/MiniSpec/autoload.php';
include '../src/specialsort.php';

describe("Testing correctly sorted Umalute", function(){
  it("sorts correctly", function() {
    $source = array("Ügistan","Deutschland","italien","Israel","ömröm","Ägypten");
    $target = array("Ägypten","Deutschland","Israel","italien","ömröm","Ügistan");
    specialsort($source);
    expect(array_values($source))->toBe(array_values($target));
  });
});

?>
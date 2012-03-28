<?php
/**
 * Special sort an array of string with German Umlauts properly
 *
 * @author jens alexander ewald
 * @version 1.0
 * @copyright amt.io, 28 March, 2012
 * @package amt.utils
 * 
 * @param $arr - An array of your choice (passed by reference!)
 * @return Integer 0 for succes, -1 for failure
 * @author jens alexander ewald
 **/
function specialsort(&$arr)
{
  try {
    $test = "ÄäÜüÖöß";
    $org = array("Ä","ä","Ö","ö","Ü","ü","ß");
    $tar = array("AE","ae","OE","oe","UE","ue","ss");
    $org_reg = array_map(function($el){ return "/^".$el."/u";}, $org);
    $tar_reg = array_map(function($el){ return "/^".$el."/u";}, $tar);
    array_walk($arr,function(&$el,$i,$data){ $el = preg_replace($data[0],$data[1],$el);},array(&$org_reg,&$tar));
    natcasesort($arr); //, SORT_NATURAL | SORT_FLAG_CASE);
    array_walk($arr,function(&$el,$i,$data){ $el = preg_replace($data[0],$data[1],$el);},array(&$tar_reg,&$org));
  } catch (Exception $e) {
    return -1;
  }
  return 0;
}
?>
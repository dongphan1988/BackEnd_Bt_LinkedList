<?php
include_once ('LinkList.php');

$linkedList = new LinkList();

$linkedList->insertFirts(11);
$linkedList->insertFirts(22);
$linkedList->insertLasts(33);
$linkedList->insertLasts(44);
$linkedList->insertLasts(66);
$linkedList->insertLasts(77);
//$totalNodes = $linkedList->totalNodes();
//$linkData = $linkedList->readLists();
//$index3 = $linkedList->checkNode(3,$linkedList);
//echo $index3->data;
//echo "<br>";
//var_dump($linkedList->nodeFirt);
//echo "<br>";
//print_r($linkedList->readLists());
//echo "<br>";
 var_dump($linkedList);
 echo "<br>";
$clones = $linkedList->cloneObjec($linkedList);
var_dump($clones);
//echo "<br>";
//print_r($linkedList->readLists());



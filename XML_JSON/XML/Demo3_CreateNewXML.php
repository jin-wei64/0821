<?php
$doc = new DOMDocument("1.0", "utf-8");
$root = $doc->createElement("HTML");
$css = $doc->createElement("CSS");

$doc->appendChild($root); //doc掛一個子元素root


$root->appendChild($css); //root掛一個子元素css
echo htmlspecialchars($doc->c14n());
?>

<?php
$xmlString = '<employees>
                <employee EmpType="SalesManager">
                  <lastName>Cashman</lastName>
                  <firstName>Briant</firstName>
                </employee>
              </employees>';
$doc = new DOMDocument();
$doc->preserveWhiteSpace=false;
$doc->loadXML($xmlString);
$root = $doc->documentElement;
$root->setAttribute("id", "001");

$xpath = new DOMXPath($doc);
$ryu = $xpath->query("/employees/employee[1]");
// var_dump($ryu);
// exit();
$ryu[0]->setAttribute("id", "01");
$ryu = $xpath->query("/employees/employee[1]/lastName");
$ryu[0]->nodeValue = "Ryu";

//delete 連鎖刪
// $ryu[0]->parentNode->removeChild($ryu[0]);

$ryu = $xpath->query("/employees/employee[1]/@id");
$ryu[0]->nodeValue = "02";


header("Content-type: text/xml", true);
echo $doc->saveXML();
?>

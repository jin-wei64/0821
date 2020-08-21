<?php
$doc = new DOMDocument();
$doc->load("employees.xml");
$doc->save("/Users/cy0004107/Downloads/employees_bak.xml");
echo "<br>-- Done --";
?>

<?php
//The saveXML() function is an alias of the asXML() function.
$note=<<<XML
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Do not forget me this weekend!</body>
</note>
XML;

$xml = new SimpleXMLElement($note);
echo $xml->asXML();
?>
<?php
$note=<<<XML
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Do not forget me this weekend!</body>
</note>
XML;

$xml = new SimpleXMLIterator($note);

// rewind to the first element
$xml->rewind();

// move to the next element
$xml->next();

// return current element
var_dump($xml->current());
?>
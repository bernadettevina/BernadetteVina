<?php
header ("Content-Type: application/xml");
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', true);
ini_set('auto_detect_line_endings', true);

$inputFilename    = 'dataa.csv';
$outputFilename   = 'output2.xml';

// Open csv to read
$inputFile  = fopen($inputFilename, 'rt');

// Get the headers of the file
$headers = fgetcsv($inputFile);

// Create a new dom document with pretty formatting
$doc  = new DomDocument( "1.0", "ISO-8859-15");
$doc->preserveWhiteSpace = false;
$doc->formatOutput   = true;
$xslt = $doc->createProcessingInstruction('xml-stylesheet', 'type="text/xsl" href="output2.xslt"');
$doc -> appendChild($xslt);
$doc->save("output2.xml");

// Add a root node to the document

$root = $doc->createElement('mydata');
$root = $doc->appendChild($root);

// Loop through each row creating a <row> node with the correct data
while (($row = fgetcsv($inputFile)) !== FALSE)
{
 $container = $doc->createElement('row');

 foreach ($headers as $i => $header)
 {
  $child = $doc->createElement($header);
  $child = $container->appendChild($child);
     $value = $doc->createTextNode($row[$i]);
     $value = $child->appendChild($value);
 }

 $root->appendChild($container);
}

//echo $doc->saveXML();

$strxml = $doc->saveXML();
$handle = fopen($outputFilename, "w");
fwrite($handle,$strxml);
fclose($handle);


echo file_get_contents('output2.xml');

//http://stackoverflow.com/questions/4852796/php-script-to-convert-csv-files-to-xml
?>
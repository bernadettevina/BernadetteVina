<?php

function sqlToXml($queryResult, $rootElementName, $childElementName)
{ 
	$xmlData = "<?xml version=\"1.0\" encoding=\"ISO-8859-1\" ?>\n<?xml-stylesheet type=\"text/xsl\" href=\"myfilexml.xslt\"?>\n";
    $xmlData.= "<" . $rootElementName . ">";
 
    while($record = mysql_fetch_object($queryResult))
    { 
        /* Create the first child element */
        $xmlData .= "<" . $childElementName . ">";
 
        for ($i = 0; $i < mysql_num_fields($queryResult); $i++)
        { 
            $fieldName = mysql_field_name($queryResult, $i); 
 
            /* The child will take the name of the table column */
            $xmlData .= "<" . $fieldName . ">";
 
            /* We set empty columns with NULL, or you could set 
                it to '0' or a blank. */
            if(!empty($record->$fieldName))
                $xmlData .= $record->$fieldName; 
            else
                $xmlData .= "null"; 
 
            $xmlData .= "</" . $fieldName . ">"; 
        } 
        $xmlData .= "</" . $childElementName . ">"; 
    } 
    $xmlData .= "</" . $rootElementName . ">"; 
 
    return $xmlData; 
}

/* Sql query */
$host = "localhost"; 
$user = "root"; 
$pass = ""; 
$database = "webservice"; 

$linkID = mysql_connect($host, $user, $pass) or die("Could not connect to host."); 
mysql_select_db($database, $linkID) or die("Could not find database."); 
$result = mysql_query("SELECT * from mahasiswa");

$hasil = sqlToXml($result, "webservice", "mahasiswa");
file_put_contents("myxmlfile.xml", $hasil);
header("Content-Type: application/xml");
echo file_get_contents('myxmlfile.xml');

?> 
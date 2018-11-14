<?php
// accept a term (keyword)
// respond with a value
$query = $_GET['q'];
$definition = [
    "definition" => "A statement of the exact meaning of a word, especially in a dictionary.",
    "bar" => "A place that sells alcholic beverages",
    "ajax" => "Technique which involves the use of javascript and xml (or JSON)",
    "html" => "The standard markup language for creating web pages and web applications.",
    "css" => "A style sheet language used for describing the presentation of a document written in a markup language.",
    "javascript" => "A lightweight, interpreted programming language with first-class functions that adds interactivity to your website.",
    "php" => "A server-side scripting language, and a powerful tool for making dynamic and interactive websites",
];
print "<h3>" . strtoupper($query) . "</h3>";
print "<p>" . $definition[$query] . "</p>";

$xmldata = '<?xml version="1.0" encoding="UTF-8"?>
 
 
 <entries>     
 
 
 <definition name="Definition " author="Sherricea">    
 A statement of the exact meaning of a word, especially in a dictionary.     
 </definition>     
 
 <definition name="Bar" author="Stacey">         
 A place that sells alcholic beverages    
 </definition>   
 
 <definition name="Ajax " author="Bethia">     
 Technique which involves the use of javascript and xml    
 </definition>
 
 <definition name="Html" author="Donique">     
The standard markup language for creating web pages and web applications.
 
 </definition>
 
<definition name="Css" author="Xelony">     
A style sheet language used for describing the presentation of a document written in a markup language.
 </definition>
 
<definition name="Javascript" author="Tiffany">     
A lightweight, interpreted programming language with first-class functions that adds interactivity to your website.

 </definition>
 
 <definition name="Php" author="Mikael"> 
 
A server-side scripting language, and a powerful tool for making dynamic and interactive websites
  
  </definition>
 
 </entries> ';
header('Content-Type: text/xml'); 
$xmlOutput = new SimpleXMLElement($xmldata); 
echo $xmlOutput->asXML();
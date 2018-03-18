<?php

$xml = simplexml_load_file('course_catalog.xml');

$xpath = '//department[title = "Computer Science"]';

foreach($xml->xpath($xpath) as $title) {
  echo $title->chair->professor->first_name . ' ';
  echo $title->chair->professor->last_name . PHP_EOL;
	}


?>
<?php 

require ('../phpalbogenerator/AlboPopGenerator.php');
require ('./AlboCittaDellaSaluteParserFactory.php');
require ('AlboCittaDellaSaluteItemConverter.php');
$generator = new AlboPopGenerator ( new AlboCittaDellaSaluteParserFactory (), new AlboCittaDellaSaluteItemConverter () );
$generator->outputFeed ("Albo POP della citt� della salute di Torino", "Versione POP dell'Albo Pretorio della citt� della salute del comune di Torino", "http://dev.opendatasicilia.it/albopop/torino/albofeed.php",
		"http://dev.opendatasicilia.it/albopop/torino/albofeed.php");
?>
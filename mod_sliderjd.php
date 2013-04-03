<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
 
$db = JFactory::getDbo();
 
$query = $db->getQuery(true);
 
$query->select(array('i.title', 'i.introtext', 'i.id'));
$query->from('#__k2_items AS i');
$query->join('INNER', '#__k2_categories AS c ON (i.catid = c.id)');
$query->where('c.alias=\'slider\'');
$db->setQuery($query);
$images = $db->loadObjectList();

require( JModuleHelper::getLayoutPath( 'mod_sliderjd' ) );


?>
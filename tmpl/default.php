<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); 
$document =& JFactory::getDocument();
$document->addStyleSheet(JURI::base() . 'modules/mod_sliderjd/themes/bar/bar.css');
$document->addStyleSheet(JURI::base() . 'modules/mod_sliderjd/themes/default/default.css');
$document->addStyleSheet(JURI::base() . 'modules/mod_sliderjd/themes/light/light.css');
$document->addStyleSheet(JURI::base() . 'modules/mod_sliderjd/themes/dark/dark.css');
$document->addStyleSheet(JURI::base() . 'modules/mod_sliderjd/css/nivo-slider.css');
?>
	<div class="slider-wrapper theme-<? echo $params->get('theme'); ?>" style="width:<? echo $params->get('width'); ?>;">
		<div id="slider" class="nivoSlider">
			<?php foreach ($images as $img){ ?>
				<img src="<? echo JURI::base().'media/k2/items/src/'.md5('Image'.$img->id).'.jpg';?>" data-thumb="<? echo JURI::base().'media/k2/items/src/'.md5('Image'.$img->id).'.jpg';?>" alt="" title="<? echo $img->introtext; ?>" />
			<? } ?>		
		</div>
    </div>
<?php
$document->addScript(JURI::base() . 'modules/mod_sliderjd/js/jquery-1.9.0.min.js');
$document->addScript(JURI::base() . 'modules/mod_sliderjd/js/jquery.nivo.slider.js');
?>
<script type="text/javascript">
	$(window).load(function() {
		$('#slider').nivoSlider();
	});
</script>
<?php
$this->breadcrumbs=array(
	$this->module->id,
);
?>

<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>

<h1>Widgets <small>Overview</small></h1>

<p>
This module provides a control called P3WidgetManager, along with an administration interface.<br/>
The P3WidgetManager allows you to dynamically create any type of widget.
</p>
<p>
This module requires installation.
</p>
<p>
	<li><?php echo CHtml::link('Manage Widgets', array('p3Widget/admin'))?></li>
	<li><?php echo CHtml::link('Manage Widget Meta Data', array('p3WidgetMeta/admin'))?></li>
	<li><?php echo CHtml::link('Manage Widget Translations', array('p3WidgetTranslation/admin'))?></li>
</p>

<p>
	<?php echo CHtml::link('Widget Playground', array('playground'))?>
</p>
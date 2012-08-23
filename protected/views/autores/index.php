<?php
$this->breadcrumbs=array(
	'Autores',
);

$this->menu=array(
	array('label'=>'Create Autores','url'=>array('create')),
	array('label'=>'Manage Autores','url'=>array('admin')),
);
?>

<h1>Autores</h1>

<?php $this->widget('bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

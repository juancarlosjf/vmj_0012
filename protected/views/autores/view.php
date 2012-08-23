<?php
$this->breadcrumbs=array(
	'Autores'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Autores','url'=>array('index')),
	array('label'=>'Create Autores','url'=>array('create')),
	array('label'=>'Update Autores','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Autores','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Autores','url'=>array('admin')),
);
?>

<h1>View Autores #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre_autor',
	),
)); ?>

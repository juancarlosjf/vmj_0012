<?php
$this->breadcrumbs=array(
	'Autores'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Autores','url'=>array('index')),
	array('label'=>'Create Autores','url'=>array('create')),
	array('label'=>'View Autores','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Autores','url'=>array('admin')),
);
?>

<h1>Update Autores <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
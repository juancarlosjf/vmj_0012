<?php
$this->breadcrumbs=array(
	'Autores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Autores','url'=>array('index')),
	array('label'=>'Manage Autores','url'=>array('admin')),
);
?>

<h1>Create Autores</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Felicitaciones! Acabmos de crear nuestra aplicación con Yii.</p>

<?php $this->beginWidget('bootstrap.widgets.BootHero', array(
    'heading'=>'Hola, sea Bienvenido',
)); ?>
 
    <p>Sea bienvenido al sistema de biblioteca de la UJCM (prototipo), sientase cómodo de enviarnos comentarios y sugerencias para la mejora del sistema.</p>
    <p><?php $this->widget('bootstrap.widgets.BootButton', array(
        'type'=>'primary',
        'size'=>'large',
        'label'=>'Saber mas',
    )); ?></p>
 
<?php $this->endWidget(); ?>
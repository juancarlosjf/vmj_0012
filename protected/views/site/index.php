<?php $this->pageTitle=Yii::app()->name; ?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    'heading'=>'Hola, sea Bienvenido',
)); ?>
 
    <p>Sea bienvenido al sistema de biblioteca de la UJCM (prototipo), sientase c�modo de enviarnos comentarios y sugerencias para la mejora del sistema.</p>
    <p><?php $this->widget('bootstrap.widgets.TbButton', array(
        'type'=>'primary',
        'size'=>'large',
        'label'=>'Saber mas',
    )); ?></p>
 
<?php $this->endWidget(); ?>
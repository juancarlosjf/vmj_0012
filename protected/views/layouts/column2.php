<?php $this->beginContent('//layouts/main'); ?>
<div class="span-16">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">
	<div id="sidebar">
	<?php

		$this->widget('bootstrap.widgets.TbMenu', array(
			'type'=>'list',
			'items'=>$this->menu
		));

	?>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>
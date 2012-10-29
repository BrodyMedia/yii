<?php
$this->pageTitle = Yii::app()->params['appTitle'];
$this->addMetaProperty('og:title', Yii::app()->params['appTitle']);
$this->addMetaProperty('og:type', 'website');
$this->addMetaProperty('og:url', $this->createUrl('index'));
$this->addMetaProperty('og:image', Yii::app()->request->getBaseUrl(true).'/images/bootstrap-avatar_normal.png');
$this->addMetaProperty('og:site_name', Yii::app()->name);
$this->addMetaProperty('og:locale',Yii::app()->fb->locale);
$this->addMetaProperty('fb:app_id', Yii::app()->fb->appID);

Yii::app()->clientScript->registerScript('siteIndex', "
	// Console \"polyfill\"
	if (!console) {
		console = {};
		console.log = function() {};
	}

	// Prevent jumping to the top of the page when demo links are clicked.
	jQuery('.site-index a').on('click', function(e) {
	    var element = $(this),
	        href = element.attr('href'),
	        toggle = element.attr('data-toggle');

	    if ((href && (href.length === 0 || href === '#')) && !toggle) {
	            return false;
	    }
	});

    // Prevent form submission.
	jQuery('.site-index form').on('submit', false);
");
?>

	<div class="row">
		<div class="span9">

			<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
				'heading'=>'ยินดีต้อนรับ!',
			)); ?>
				<p>
					Bringing together the <?php echo CHtml::link('Yii PHP framework', 'http://www.yiiframework.com'); ?> and
					<?php echo CHtml::link('Twitter Bootstrap', 'http://twitter.github.com/bootstrap/'); ?>.
				</p>
				<p>
					<?php echo CHtml::link('Yii-Bootstrap', 'http://www.yiiframework.com/extension/bootstrap/'); ?>
					is an extension for Yii that provides a wide range of widgets that allow developers to easily use Bootstrap with Yii.
					All widgets have been developed following Yii's conventions and work seamlessly together with Bootstrap and its jQuery plugins.
				</p>
			<?php $this->endWidget(); ?>

			<?php if (!empty($this->breadcrumbs)):?>
				<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
					'links'=>$this->breadcrumbs,
				)); ?>
			<?php endif?>

		</div>

		<div class="span3">
			<div class="donate">

				<h3>Support development</h3>

				<p>Would you like to say thanks for the time and effort put on this project? Consider donating.</p>

				<hr />

				<h3>Support development</h3>

				<p>Would you like to say thanks for the time and effort put on this project? Consider donating.</p>


			</div>
		</div>
	</div>

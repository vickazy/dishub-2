<?php
$this->breadcrumbs=array(
	'Balais'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Daftar Balai', 'url'=>array('admin')),
);
?>

<h1>Tambah Balai</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<h3>Szczegóły drukarki: <?php echo $model->name; ?></h3>
<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'name',
        'inventoryNumber',
        'rooms.name'
    )
));

$this->menu=array(
    array('label'=>'Edytuj', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'USUŃ', 
        'url'=>'#', 
        'linkOptions'=>array(
            'submit' => array('delete', 'id'=>$model->id),
            'confirm' => 'Czy na pewno chcesz usunąć drukarkę?',
            'class' => 'deleteBtn'), 
            
    ),    
    array('label'=>'Powrót', 'url'=>array('manage')),
);

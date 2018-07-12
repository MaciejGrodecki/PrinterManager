<div class="pageTitle">
    <h3>Lista drukarek</h3>
</div>

<?php

$this->menu=array(
    array('label'=>'Dodaj drukarkę', 'url'=>array('add')),
    array('label'=>'Zarządzaj', 'url'=>array('manage')),
);

$dataProvider = new CActiveDataProvider('Printer');

$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $dataProvider,
    'summaryText' => 'Ilość elementów: {end}',
    'columns' => array(
        'id',
        'name',
        'inventoryNumber',
        'rooms.name'
    )  
));

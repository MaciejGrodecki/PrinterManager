<div class="pageTitle">
    <h3>Lista pomieszczeń</h3>
</div>

<?php

$this->menu=array(
    array('label'=>'Dodaj pomieszczenie', 'url'=>array('add')),
    array('label'=>'Zarządzaj', 'url'=>array('manage')),
);

$dataProvider = new CActiveDataProvider('Room');

$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $dataProvider,
    'summaryText' => 'Ilość elementów: {end}',
    
));

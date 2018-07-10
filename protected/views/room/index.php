<div class="pageTitle">
    <h3>Lista pomieszczeń</h3>
</div>

<?php

$dataProvider = new CActiveDataProvider('Room');

$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $dataProvider,
    'summaryText' => 'Ilość elementów: {end}',
    
));

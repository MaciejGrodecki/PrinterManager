<div class="search-form" style="display: none">
    <div class="wide form">
        <?php $form=$this->beginWidget('CActiveForm', array(
            'action'=>Yii::app()->createUrl($this->route),
            'method'=>'get'
            ));?>
        
        
        <div class="row">
            <?php
                echo $form->label($model, 'id');
                echo $form->textField($model, 'id');
            ?>
        </div>
    </div>
    <?php $this->endWidget(); ?>
</div>
<div class="pageTitle">
    <h3>Zarządzanie drukarkami</h3>
</div>

<?php

$this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'printer-grid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'id',
        'name',
        'inventoryNumber',
        array('name'=>'room_name', 'value'=>'$data->rooms->name'),
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}',
            'buttons'=>array(
                'view'=>array(
                    'url'=> 'Yii::app()->createUrl("printer/view", array("id"=>$data->id))'
                )
            )
        )
    ),
    'summaryText' => 'Ilość elementów: {end}',
));

$this->menu=array(
    array('label'=>'Powrót', 'url'=>array('index')),
);






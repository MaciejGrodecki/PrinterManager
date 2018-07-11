<div class="search-form" style="display:none">
    <div class="wide form">
    <?php $form=$this->beginWidget('CActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get'
));
?>
    <div class="row">
        <?php
            echo $form->label($model, 'id');
            echo $form->textField($model, 'id');
            ?>
    </div>
</div>


<?php $this->endWidget(); ?>
    
</div>

<h3>Zarządzaj pomieszczeniami</h3>
<?php 

$this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'room-grid',
    'dataProvider'=>$model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'name',
        array(
            'class'=>'CButtonColumn',
            'template' => '{view}',
            'buttons' => array(
                'view' => array(
                    'url' => 'Yii::app()->createUrl("room/view", array("id"=>$data->id))'
                )
            )
        )
    ),
    'summaryText' => 'Ilość pozycji: {end}',
));

$this->menu=array(
    array('label'=>'Powrót', 'url'=>array('index')),
);



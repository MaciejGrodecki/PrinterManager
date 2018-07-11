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
            'buttons' => array(
                'view' => array(
                    'url' => 'Yii::app()->createUrl("room/view", array("id"=>$data->id))'
                )
            )
        )
    )
));



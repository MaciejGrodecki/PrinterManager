<h3>Dodaj drukarkę</h3>
<div class="form">
    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'printer-form',
        'enableAjaxValidation'=>false,
    ));
    echo $form->errorSummary($model);
    ?>
    <div class="row">
        <?php
            echo $form->labelEx($model, 'name');
            echo $form->textField($model, 'name');
            echo $form->error($model, 'name');
        ?>
    </div>
    <div class="row">
        <?php
            echo $form->labelEx($model, 'inventoryNumber');
            echo $form->textField($model, 'inventoryNumber');
            echo $form->error($model, 'inventoryNumber');
        ?>
    </div>
    <div class="row">
        <?php
            echo $form->labelEx($model, 'rooms.name');
            $rooms = CHtml::listData(Room::model()->findAll(), 'id', 'name');
            echo $form->dropDownList($model, 'room_id', $rooms);
        ?>
    </div>
    <div class="row buttons">
        <?php
            echo CHtml::submitButton($model->isNewRecord ? 'Zapisz' : 'Zapisz');
        ?>
    </div>
    
    <?php 
    $this->endWidget();
    ?>
</div>
<?php
$this->menu=array(
    array('label'=>'Powrót', 'url'=>array('index')),
);


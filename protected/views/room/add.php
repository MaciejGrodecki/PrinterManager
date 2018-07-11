<h3>Dodaj pomieszczenie</h3>
<div class="form">
    <?php $form=$this->beginWidget('CActiveForm',array(
        'id'=>'room-form',
        'enableAjaxValidation'=>false,
    ));
    echo $form->errorSummary($model);
    ?>
    
    <div class="row">
        <?php
            echo $form->labelEx($model, 'name');
            echo $form->textField($model, 'name');
            echo $form->error($model,'name');
        ?>
    </div>
    <div class="row buttons">
        <?php
            echo CHtml::submitButton($model->isNewRecord ? 'Zapisz' : 'Zapisz'); 
            ?>
    </div>
    
    
    <?php $this->endWidget(); ?>
</div>

<?php
$this->menu=array(
    array('label'=>'Powrót', 'url'=>array('index')),
);




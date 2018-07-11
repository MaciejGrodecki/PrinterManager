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
            echo CHtml::submitButton($model->isNewRecord ? 'Zapisz' : 'Save') ?>
    </div>
    
    
    <?php $this->endWidget(); ?>
</div>




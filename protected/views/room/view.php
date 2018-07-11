<h3>Szczegóły pomieszczenia: <?php echo $model->name; ?></h3>
<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'name'
    )
));

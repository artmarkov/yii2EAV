<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

?>
<div class="site-index">
    <?/*
    $constructorEAV = \mirocow\eav\admin\widgets\Fields::widget([
        'model' => $model,
        'categoryId' => 8,
        'entityName' => 'Категория',
        'entityModel' => 'backend\models\Product',
    ]);
    echo $constructorEAV;
    */?>
    <?= \mirocow\eav\admin\widgets\Fields::widget([
        'model' => $model,
        'categoryId' => $model->id,
        'entityName' => 'Продукт',
        'entityModel' => 'app\models\Product', // ваша модель для которой подключено расширение
    ])?>
</div>
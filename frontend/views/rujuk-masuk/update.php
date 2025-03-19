<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RujukMasuk $model */

$this->title = 'Update Rujuk Masuk: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Rujuk Masuks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rujuk-masuk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

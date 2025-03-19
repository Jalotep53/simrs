<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TemporaryPermintaanRadiologi $model */

$this->title = 'Update Temporary Permintaan Radiologi: ' . $model->no;
$this->params['breadcrumbs'][] = ['label' => 'Temporary Permintaan Radiologis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no, 'url' => ['view', 'no' => $model->no]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="temporary-permintaan-radiologi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

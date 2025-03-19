<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ParkirJenis $model */

$this->title = 'Update Parkir Jenis: ' . $model->kd_parkir;
$this->params['breadcrumbs'][] = ['label' => 'Parkir Jenis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_parkir, 'url' => ['view', 'kd_parkir' => $model->kd_parkir]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="parkir-jenis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

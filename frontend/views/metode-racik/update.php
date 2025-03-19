<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MetodeRacik $model */

$this->title = 'Update Metode Racik: ' . $model->kd_racik;
$this->params['breadcrumbs'][] = ['label' => 'Metode Raciks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_racik, 'url' => ['view', 'kd_racik' => $model->kd_racik]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="metode-racik-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Parkir $model */

$this->title = 'Update Parkir: ' . $model->no_kendaraan;
$this->params['breadcrumbs'][] = ['label' => 'Parkirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_kendaraan, 'url' => ['view', 'no_kendaraan' => $model->no_kendaraan, 'tgl_masuk' => $model->tgl_masuk, 'jam_masuk' => $model->jam_masuk]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="parkir-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

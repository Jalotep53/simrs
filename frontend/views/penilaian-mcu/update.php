<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMcu $model */

$this->title = 'Update Penilaian Mcu: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Mcus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penilaian-mcu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

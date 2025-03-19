<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BiayaHarian $model */

$this->title = 'Update Biaya Harian: ' . $model->kd_kamar;
$this->params['breadcrumbs'][] = ['label' => 'Biaya Harians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_kamar, 'url' => ['view', 'kd_kamar' => $model->kd_kamar, 'nama_biaya' => $model->nama_biaya]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="biaya-harian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

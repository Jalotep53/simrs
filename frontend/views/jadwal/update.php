<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Jadwal $model */

$this->title = 'Update Jadwal: ' . $model->kd_dokter;
$this->params['breadcrumbs'][] = ['label' => 'Jadwals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_dokter, 'url' => ['view', 'kd_dokter' => $model->kd_dokter, 'hari_kerja' => $model->hari_kerja, 'jam_mulai' => $model->jam_mulai]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jadwal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

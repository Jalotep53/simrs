<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UtdMedisRusak $model */

$this->title = 'Update Utd Medis Rusak: ' . $model->kode_brng;
$this->params['breadcrumbs'][] = ['label' => 'Utd Medis Rusaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_brng, 'url' => ['view', 'kode_brng' => $model->kode_brng, 'nip' => $model->nip, 'tanggal' => $model->tanggal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="utd-medis-rusak-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

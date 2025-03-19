<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PemeriksaanGinekologiRanap $model */

$this->title = 'Update Pemeriksaan Ginekologi Ranap: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Pemeriksaan Ginekologi Ranaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'tgl_perawatan' => $model->tgl_perawatan, 'jam_rawat' => $model->jam_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pemeriksaan-ginekologi-ranap-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DetailPemberianObat $model */

$this->title = 'Update Detail Pemberian Obat: ' . $model->tgl_perawatan;
$this->params['breadcrumbs'][] = ['label' => 'Detail Pemberian Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tgl_perawatan, 'url' => ['view', 'tgl_perawatan' => $model->tgl_perawatan, 'jam' => $model->jam, 'no_rawat' => $model->no_rawat, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detail-pemberian-obat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

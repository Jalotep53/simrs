<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DetailPiutangPasien $model */

$this->title = 'Update Detail Piutang Pasien: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Detail Piutang Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'nama_bayar' => $model->nama_bayar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detail-piutang-pasien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

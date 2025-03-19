<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BuktiPersetujuanTransferPasienAntarRuang $model */

$this->title = 'Update Bukti Persetujuan Transfer Pasien Antar Ruang: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Bukti Persetujuan Transfer Pasien Antar Ruangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bukti-persetujuan-transfer-pasien-antar-ruang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

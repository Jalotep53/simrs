<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BuktiPersetujuanTransferPasienAntarRuang $model */

$this->title = 'Create Bukti Persetujuan Transfer Pasien Antar Ruang';
$this->params['breadcrumbs'][] = ['label' => 'Bukti Persetujuan Transfer Pasien Antar Ruangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bukti-persetujuan-transfer-pasien-antar-ruang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

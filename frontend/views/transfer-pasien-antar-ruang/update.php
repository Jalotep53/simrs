<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TransferPasienAntarRuang $model */

$this->title = 'Update Transfer Pasien Antar Ruang: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Transfer Pasien Antar Ruangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'tanggal_masuk' => $model->tanggal_masuk]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transfer-pasien-antar-ruang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

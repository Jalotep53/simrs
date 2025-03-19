<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatImunisasi $model */

$this->title = 'Update Riwayat Imunisasi: ' . $model->no_rkm_medis;
$this->params['breadcrumbs'][] = ['label' => 'Riwayat Imunisasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rkm_medis, 'url' => ['view', 'no_rkm_medis' => $model->no_rkm_medis, 'kode_imunisasi' => $model->kode_imunisasi, 'no_imunisasi' => $model->no_imunisasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="riwayat-imunisasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

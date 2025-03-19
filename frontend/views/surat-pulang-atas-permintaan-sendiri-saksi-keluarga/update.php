<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPulangAtasPermintaanSendiriSaksiKeluarga $model */

$this->title = 'Update Surat Pulang Atas Permintaan Sendiri Saksi Keluarga: ' . $model->no_surat;
$this->params['breadcrumbs'][] = ['label' => 'Surat Pulang Atas Permintaan Sendiri Saksi Keluargas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_surat, 'url' => ['view', 'no_surat' => $model->no_surat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-pulang-atas-permintaan-sendiri-saksi-keluarga-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

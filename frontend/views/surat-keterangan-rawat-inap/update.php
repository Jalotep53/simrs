<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratKeteranganRawatInap $model */

$this->title = 'Update Surat Keterangan Rawat Inap: ' . $model->no_surat;
$this->params['breadcrumbs'][] = ['label' => 'Surat Keterangan Rawat Inaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_surat, 'url' => ['view', 'no_surat' => $model->no_surat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-keterangan-rawat-inap-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingSuratKontrolBpjs $model */

$this->title = 'Update Bridging Surat Kontrol Bpjs: ' . $model->no_surat;
$this->params['breadcrumbs'][] = ['label' => 'Bridging Surat Kontrol Bpjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_surat, 'url' => ['view', 'no_surat' => $model->no_surat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bridging-surat-kontrol-bpjs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

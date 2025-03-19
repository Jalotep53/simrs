<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MapingObatApotekBpjs $model */

$this->title = 'Update Maping Obat Apotek Bpjs: ' . $model->kode_brng_apotek_bpjs;
$this->params['breadcrumbs'][] = ['label' => 'Maping Obat Apotek Bpjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_brng_apotek_bpjs, 'url' => ['view', 'kode_brng_apotek_bpjs' => $model->kode_brng_apotek_bpjs]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="maping-obat-apotek-bpjs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

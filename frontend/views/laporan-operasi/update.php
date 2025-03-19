<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\LaporanOperasi $model */

$this->title = 'Update Laporan Operasi: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Laporan Operasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="laporan-operasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

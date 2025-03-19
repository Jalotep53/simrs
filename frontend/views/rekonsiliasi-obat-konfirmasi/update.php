<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RekonsiliasiObatKonfirmasi $model */

$this->title = 'Update Rekonsiliasi Obat Konfirmasi: ' . $model->no_rekonsiliasi;
$this->params['breadcrumbs'][] = ['label' => 'Rekonsiliasi Obat Konfirmasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rekonsiliasi, 'url' => ['view', 'no_rekonsiliasi' => $model->no_rekonsiliasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rekonsiliasi-obat-konfirmasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

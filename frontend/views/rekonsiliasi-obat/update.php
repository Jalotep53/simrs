<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RekonsiliasiObat $model */

$this->title = 'Update Rekonsiliasi Obat: ' . $model->no_rekonsiliasi;
$this->params['breadcrumbs'][] = ['label' => 'Rekonsiliasi Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rekonsiliasi, 'url' => ['view', 'no_rekonsiliasi' => $model->no_rekonsiliasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rekonsiliasi-obat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

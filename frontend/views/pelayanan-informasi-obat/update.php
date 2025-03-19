<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PelayananInformasiObat $model */

$this->title = 'Update Pelayanan Informasi Obat: ' . $model->no_permintaan;
$this->params['breadcrumbs'][] = ['label' => 'Pelayanan Informasi Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_permintaan, 'url' => ['view', 'no_permintaan' => $model->no_permintaan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pelayanan-informasi-obat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

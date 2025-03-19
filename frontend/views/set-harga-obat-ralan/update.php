<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetHargaObatRalan $model */

$this->title = 'Update Set Harga Obat Ralan: ' . $model->kd_pj;
$this->params['breadcrumbs'][] = ['label' => 'Set Harga Obat Ralans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_pj, 'url' => ['view', 'kd_pj' => $model->kd_pj]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="set-harga-obat-ralan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

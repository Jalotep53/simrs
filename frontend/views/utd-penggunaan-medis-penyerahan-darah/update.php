<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPenggunaanMedisPenyerahanDarah $model */

$this->title = 'Update Utd Penggunaan Medis Penyerahan Darah: ' . $model->no_penyerahan;
$this->params['breadcrumbs'][] = ['label' => 'Utd Penggunaan Medis Penyerahan Darahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_penyerahan, 'url' => ['view', 'no_penyerahan' => $model->no_penyerahan, 'kode_brng' => $model->kode_brng]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="utd-penggunaan-medis-penyerahan-darah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

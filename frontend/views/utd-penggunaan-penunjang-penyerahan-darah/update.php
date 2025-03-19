<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPenggunaanPenunjangPenyerahanDarah $model */

$this->title = 'Update Utd Penggunaan Penunjang Penyerahan Darah: ' . $model->no_penyerahan;
$this->params['breadcrumbs'][] = ['label' => 'Utd Penggunaan Penunjang Penyerahan Darahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_penyerahan, 'url' => ['view', 'no_penyerahan' => $model->no_penyerahan, 'kode_brng' => $model->kode_brng]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="utd-penggunaan-penunjang-penyerahan-darah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

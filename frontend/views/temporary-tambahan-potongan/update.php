<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TemporaryTambahanPotongan $model */

$this->title = 'Update Temporary Tambahan Potongan: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Temporary Tambahan Potongans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'nama_tambahan' => $model->nama_tambahan, 'status' => $model->status]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="temporary-tambahan-potongan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

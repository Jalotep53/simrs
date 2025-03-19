<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Operasi $model */

$this->title = 'Update Operasi: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Operasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'tgl_operasi' => $model->tgl_operasi, 'kode_paket' => $model->kode_paket]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="operasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AturanPakai $model */

$this->title = 'Update Aturan Pakai: ' . $model->tgl_perawatan;
$this->params['breadcrumbs'][] = ['label' => 'Aturan Pakais', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tgl_perawatan, 'url' => ['view', 'tgl_perawatan' => $model->tgl_perawatan, 'jam' => $model->jam, 'no_rawat' => $model->no_rawat, 'kode_brng' => $model->kode_brng]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aturan-pakai-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

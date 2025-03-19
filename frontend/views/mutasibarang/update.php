<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Mutasibarang $model */

$this->title = 'Update Mutasibarang: ' . $model->kode_brng;
$this->params['breadcrumbs'][] = ['label' => 'Mutasibarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_brng, 'url' => ['view', 'kode_brng' => $model->kode_brng, 'kd_bangsaldari' => $model->kd_bangsaldari, 'kd_bangsalke' => $model->kd_bangsalke, 'tanggal' => $model->tanggal, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mutasibarang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

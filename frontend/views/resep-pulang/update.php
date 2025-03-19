<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ResepPulang $model */

$this->title = 'Update Resep Pulang: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Resep Pulangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'kode_brng' => $model->kode_brng, 'tanggal' => $model->tanggal, 'jam' => $model->jam, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="resep-pulang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

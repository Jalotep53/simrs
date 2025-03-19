<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DataBatch $model */

$this->title = 'Update Data Batch: ' . $model->no_batch;
$this->params['breadcrumbs'][] = ['label' => 'Data Batches', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_batch, 'url' => ['view', 'no_batch' => $model->no_batch, 'kode_brng' => $model->kode_brng, 'no_faktur' => $model->no_faktur]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-batch-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

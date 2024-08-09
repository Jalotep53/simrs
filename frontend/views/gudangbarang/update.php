<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Gudangbarang $model */

$this->title = 'Update Gudangbarang: ' . $model->kode_brng;
$this->params['breadcrumbs'][] = ['label' => 'Gudangbarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_brng, 'url' => ['view', 'kode_brng' => $model->kode_brng, 'kd_bangsal' => $model->kd_bangsal, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gudangbarang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

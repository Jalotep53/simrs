<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\EvaluasiKinerja $model */

$this->title = 'Update Evaluasi Kinerja: ' . $model->kode_evaluasi;
$this->params['breadcrumbs'][] = ['label' => 'Evaluasi Kinerjas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_evaluasi, 'url' => ['view', 'kode_evaluasi' => $model->kode_evaluasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="evaluasi-kinerja-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SkpKriteriaPenilaian $model */

$this->title = 'Update Skp Kriteria Penilaian: ' . $model->kode_kriteria;
$this->params['breadcrumbs'][] = ['label' => 'Skp Kriteria Penilaians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_kriteria, 'url' => ['view', 'kode_kriteria' => $model->kode_kriteria]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="skp-kriteria-penilaian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

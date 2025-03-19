<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ChecklistKriteriaMasukIcu $model */

$this->title = 'Update Checklist Kriteria Masuk Icu: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Checklist Kriteria Masuk Icus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="checklist-kriteria-masuk-icu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

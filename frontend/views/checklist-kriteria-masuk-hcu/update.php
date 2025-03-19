<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ChecklistKriteriaMasukHcu $model */

$this->title = 'Update Checklist Kriteria Masuk Hcu: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Checklist Kriteria Masuk Hcus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="checklist-kriteria-masuk-hcu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

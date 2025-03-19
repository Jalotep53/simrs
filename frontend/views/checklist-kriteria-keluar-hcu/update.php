<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ChecklistKriteriaKeluarHcu $model */

$this->title = 'Update Checklist Kriteria Keluar Hcu: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Checklist Kriteria Keluar Hcus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="checklist-kriteria-keluar-hcu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

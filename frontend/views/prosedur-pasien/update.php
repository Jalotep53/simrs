<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ProsedurPasien $model */

$this->title = 'Update Prosedur Pasien: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Prosedur Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'kode' => $model->kode, 'status' => $model->status]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prosedur-pasien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MutasiBerkas $model */

$this->title = 'Update Mutasi Berkas: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Mutasi Berkas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mutasi-berkas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

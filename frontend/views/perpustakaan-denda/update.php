<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanDenda $model */

$this->title = 'Update Perpustakaan Denda: ' . $model->kode_denda;
$this->params['breadcrumbs'][] = ['label' => 'Perpustakaan Dendas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_denda, 'url' => ['view', 'kode_denda' => $model->kode_denda]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="perpustakaan-denda-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

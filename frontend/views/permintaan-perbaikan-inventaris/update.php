<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanPerbaikanInventaris $model */

$this->title = 'Update Permintaan Perbaikan Inventaris: ' . $model->no_permintaan;
$this->params['breadcrumbs'][] = ['label' => 'Permintaan Perbaikan Inventaris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_permintaan, 'url' => ['view', 'no_permintaan' => $model->no_permintaan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="permintaan-perbaikan-inventaris-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanInventaris $model */

$this->title = 'Update Perpustakaan Inventaris: ' . $model->no_inventaris;
$this->params['breadcrumbs'][] = ['label' => 'Perpustakaan Inventaris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_inventaris, 'url' => ['view', 'no_inventaris' => $model->no_inventaris]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="perpustakaan-inventaris-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

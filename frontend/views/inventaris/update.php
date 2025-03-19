<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Inventaris $model */

$this->title = 'Update Inventaris: ' . $model->no_inventaris;
$this->params['breadcrumbs'][] = ['label' => 'Inventaris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_inventaris, 'url' => ['view', 'no_inventaris' => $model->no_inventaris]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inventaris-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

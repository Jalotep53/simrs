<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PerbaikanInventaris $model */

$this->title = 'Create Perbaikan Inventaris';
$this->params['breadcrumbs'][] = ['label' => 'Perbaikan Inventaris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perbaikan-inventaris-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

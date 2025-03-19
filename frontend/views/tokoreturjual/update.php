<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tokoreturjual $model */

$this->title = 'Update Tokoreturjual: ' . $model->no_retur_jual;
$this->params['breadcrumbs'][] = ['label' => 'Tokoreturjuals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_retur_jual, 'url' => ['view', 'no_retur_jual' => $model->no_retur_jual]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tokoreturjual-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

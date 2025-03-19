<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Returjual $model */

$this->title = 'Update Returjual: ' . $model->no_retur_jual;
$this->params['breadcrumbs'][] = ['label' => 'Returjuals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_retur_jual, 'url' => ['view', 'no_retur_jual' => $model->no_retur_jual]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="returjual-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

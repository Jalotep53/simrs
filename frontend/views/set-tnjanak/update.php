<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetTnjanak $model */

$this->title = 'Update Set Tnjanak: ' . $model->tnj;
$this->params['breadcrumbs'][] = ['label' => 'Set Tnjanaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tnj, 'url' => ['view', 'tnj' => $model->tnj]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="set-tnjanak-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

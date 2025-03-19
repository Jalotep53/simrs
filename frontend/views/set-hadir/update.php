<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetHadir $model */

$this->title = 'Update Set Hadir: ' . $model->tnj;
$this->params['breadcrumbs'][] = ['label' => 'Set Hadirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tnj, 'url' => ['view', 'tnj' => $model->tnj]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="set-hadir-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

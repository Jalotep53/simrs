<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetLemburhb $model */

$this->title = 'Update Set Lemburhb: ' . $model->tnj;
$this->params['breadcrumbs'][] = ['label' => 'Set Lemburhbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tnj, 'url' => ['view', 'tnj' => $model->tnj]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="set-lemburhb-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

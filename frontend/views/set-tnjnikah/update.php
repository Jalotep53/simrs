<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetTnjnikah $model */

$this->title = 'Update Set Tnjnikah: ' . $model->tnj;
$this->params['breadcrumbs'][] = ['label' => 'Set Tnjnikahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tnj, 'url' => ['view', 'tnj' => $model->tnj]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="set-tnjnikah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Deposit $model */

$this->title = 'Update Deposit: ' . $model->no_deposit;
$this->params['breadcrumbs'][] = ['label' => 'Deposits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_deposit, 'url' => ['view', 'no_deposit' => $model->no_deposit]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="deposit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

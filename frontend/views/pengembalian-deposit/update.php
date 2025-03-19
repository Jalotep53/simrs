<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PengembalianDeposit $model */

$this->title = 'Update Pengembalian Deposit: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Pengembalian Deposits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengembalian-deposit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

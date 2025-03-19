<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PengembalianDeposit $model */

$this->title = 'Create Pengembalian Deposit';
$this->params['breadcrumbs'][] = ['label' => 'Pengembalian Deposits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengembalian-deposit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

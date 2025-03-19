<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BankTujuanTransferBankmandiri $model */

$this->title = 'Update Bank Tujuan Transfer Bankmandiri: ' . $model->kode_bank;
$this->params['breadcrumbs'][] = ['label' => 'Bank Tujuan Transfer Bankmandiris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_bank, 'url' => ['view', 'kode_bank' => $model->kode_bank]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bank-tujuan-transfer-bankmandiri-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

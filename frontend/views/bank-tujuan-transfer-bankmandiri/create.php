<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BankTujuanTransferBankmandiri $model */

$this->title = 'Create Bank Tujuan Transfer Bankmandiri';
$this->params['breadcrumbs'][] = ['label' => 'Bank Tujuan Transfer Bankmandiris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bank-tujuan-transfer-bankmandiri-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

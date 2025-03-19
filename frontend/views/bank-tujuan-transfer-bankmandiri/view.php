<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\BankTujuanTransferBankmandiri $model */

$this->title = $model->kode_bank;
$this->params['breadcrumbs'][] = ['label' => 'Bank Tujuan Transfer Bankmandiris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="bank-tujuan-transfer-bankmandiri-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_bank' => $model->kode_bank], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_bank' => $model->kode_bank], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kode_bank',
            'nama_bank',
        ],
    ]) ?>

</div>

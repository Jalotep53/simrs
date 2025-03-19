<?php

use frontend\models\BankTujuanTransferBankmandiri;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BankTujuanTransferBankmandiriSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bank Tujuan Transfer Bankmandiris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bank-tujuan-transfer-bankmandiri-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bank Tujuan Transfer Bankmandiri', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_bank',
            'nama_bank',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BankTujuanTransferBankmandiri $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_bank' => $model->kode_bank]);
                 }
            ],
        ],
    ]); ?>


</div>

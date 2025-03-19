<?php

use frontend\models\Tamppiutang;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TamppiutangSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tamppiutangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tamppiutang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tamppiutang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_brng',
            'nama_brng',
            'satuan',
            'h_jual',
            'h_beli',
            //'jumlah',
            //'subtotal',
            //'dis',
            //'bsr_dis',
            //'total',
            //'no_batch',
            //'petugas',
            //'no_faktur',
            //'aturan_pakai',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tamppiutang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]);
                 }
            ],
        ],
    ]); ?>


</div>

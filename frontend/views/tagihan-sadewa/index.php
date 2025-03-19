<?php

use frontend\models\TagihanSadewa;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TagihanSadewaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tagihan Sadewas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tagihan-sadewa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tagihan Sadewa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_nota',
            'no_rkm_medis',
            'nama_pasien',
            'alamat',
            'tgl_bayar',
            //'jenis_bayar',
            //'jumlah_tagihan',
            //'jumlah_bayar',
            //'status',
            //'petugas',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TagihanSadewa $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_nota' => $model->no_nota]);
                 }
            ],
        ],
    ]); ?>


</div>

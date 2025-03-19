<?php

use frontend\models\TagihanBriva;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TagihanBrivaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tagihan Brivas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tagihan-briva-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tagihan Briva', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rkm_medis',
            'nm_pasien',
            'alamat',
            'jk',
            'tgl_lahir',
            //'tgl_registrasi',
            //'no_tagihan',
            //'besar_bayar',
            //'keterangan',
            //'status_tagihan',
            //'tgl_closing',
            //'status_bayar',
            //'kasir',
            //'diupdatebank',
            //'referensi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TagihanBriva $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_tagihan' => $model->no_tagihan, 'status_tagihan' => $model->status_tagihan]);
                 }
            ],
        ],
    ]); ?>


</div>

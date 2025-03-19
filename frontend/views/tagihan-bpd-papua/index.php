<?php

use frontend\models\TagihanBpdPapua;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TagihanBpdPapuaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tagihan Bpd Papuas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tagihan-bpd-papua-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tagihan Bpd Papua', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'umurdaftar',
            //'tgl_registrasi',
            //'no_nota',
            //'besar_bayar',
            //'keterangan',
            //'no_rawat',
            //'status_lanjut',
            //'tgl_closing',
            //'status_bayar',
            //'kasir',
            //'diupdatebank',
            //'referensi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TagihanBpdPapua $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_nota' => $model->no_nota]);
                 }
            ],
        ],
    ]); ?>


</div>

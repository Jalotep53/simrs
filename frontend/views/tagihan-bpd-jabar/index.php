<?php

use frontend\models\TagihanBpdJabar;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TagihanBpdJabarSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tagihan Bpd Jabars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tagihan-bpd-jabar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tagihan Bpd Jabar', ['create'], ['class' => 'btn btn-success']) ?>
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
                'urlCreator' => function ($action, TagihanBpdJabar $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_nota' => $model->no_nota]);
                 }
            ],
        ],
    ]); ?>


</div>

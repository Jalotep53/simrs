<?php

use frontend\models\TagihanMandiri;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TagihanMandiriSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tagihan Mandiris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tagihan-mandiri-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tagihan Mandiri', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'no_rawat',
            //'no_id',
            //'status_lanjut',
            //'tgl_closing',
            //'status_bayar',
            //'pembatalan',
            //'dibatalkan_oleh',
            //'besar_batal',
            //'kasir',
            //'tambahan1',
            //'tambahan2',
            //'tambahan3',
            //'diupdatebank',
            //'referensi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TagihanMandiri $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_nota' => $model->no_nota]);
                 }
            ],
        ],
    ]); ?>


</div>

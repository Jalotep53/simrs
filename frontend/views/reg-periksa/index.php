<?php

use frontend\models\RegPeriksa;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\RegPeriksaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Reg Periksas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reg-periksa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Reg Periksa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_reg',
            'no_rawat',
            'tgl_registrasi',
            'jam_reg',
            'kd_dokter',
            //'no_rkm_medis',
            //'kd_poli',
            //'p_jawab',
            //'almt_pj',
            //'hubunganpj',
            //'biaya_reg',
            //'stts',
            //'stts_daftar',
            //'status_lanjut',
            //'kd_pj',
            //'umurdaftar',
            //'sttsumur',
            //'status_bayar',
            //'status_poli',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, RegPeriksa $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>

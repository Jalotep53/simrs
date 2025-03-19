<?php

use frontend\models\AsuhanGizi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\AsuhanGiziSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Asuhan Gizis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asuhan-gizi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Asuhan Gizi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'antropometri_bb',
            'antropometri_tb',
            'antropometri_imt',
            //'antropometri_lla',
            //'antropometri_tl',
            //'antropometri_ulna',
            //'antropometri_bbideal',
            //'antropometri_bbperu',
            //'antropometri_tbperu',
            //'antropometri_bbpertb',
            //'antropometri_llaperu',
            //'biokimia',
            //'fisik_klinis',
            //'alergi_telur',
            //'alergi_susu_sapi',
            //'alergi_kacang',
            //'alergi_gluten',
            //'alergi_udang',
            //'alergi_ikan',
            //'alergi_hazelnut',
            //'pola_makan',
            //'riwayat_personal',
            //'diagnosis',
            //'intervensi_gizi',
            //'monitoring_evaluasi',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AsuhanGizi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>

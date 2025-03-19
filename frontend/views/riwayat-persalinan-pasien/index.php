<?php

use frontend\models\RiwayatPersalinanPasien;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatPersalinanPasienSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Riwayat Persalinan Pasiens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="riwayat-persalinan-pasien-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Riwayat Persalinan Pasien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rkm_medis',
            'tgl_thn',
            'tempat_persalinan',
            'usia_hamil',
            'jenis_persalinan',
            //'penolong',
            //'penyulit',
            //'jk',
            //'bbpb',
            //'keadaan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, RiwayatPersalinanPasien $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rkm_medis' => $model->no_rkm_medis, 'tgl_thn' => $model->tgl_thn]);
                 }
            ],
        ],
    ]); ?>


</div>

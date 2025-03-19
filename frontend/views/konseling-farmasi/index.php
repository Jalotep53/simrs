<?php

use frontend\models\KonselingFarmasi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\KonselingFarmasiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Konseling Farmasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="konseling-farmasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Konseling Farmasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'diagnosa',
            'obat_pemakaian',
            'riwayat_alergi',
            //'keluhan',
            //'pernah_datang',
            //'tindak_lanjut',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, KonselingFarmasi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>

<?php

use frontend\models\SuratKeteranganSehat;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SuratKeteranganSehatSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Surat Keterangan Sehats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-keterangan-sehat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Surat Keterangan Sehat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_surat',
            'no_rawat',
            'tanggalsurat',
            'berat',
            'tinggi',
            //'tensi',
            //'suhu',
            //'butawarna',
            //'keperluan',
            //'kesimpulan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SuratKeteranganSehat $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_surat' => $model->no_surat]);
                 }
            ],
        ],
    ]); ?>


</div>

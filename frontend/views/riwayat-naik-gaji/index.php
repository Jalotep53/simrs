<?php

use frontend\models\RiwayatNaikGaji;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatNaikGajiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Riwayat Naik Gajis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="riwayat-naik-gaji-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Riwayat Naik Gaji', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pangkatjabatan',
            'gapok',
            'tmt_berkala',
            'tmt_berkala_yad',
            //'no_sk',
            //'tgl_sk',
            //'masa_kerja',
            //'bulan_kerja',
            //'berkas',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, RiwayatNaikGaji $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id, 'pangkatjabatan' => $model->pangkatjabatan, 'gapok' => $model->gapok]);
                 }
            ],
        ],
    ]); ?>


</div>

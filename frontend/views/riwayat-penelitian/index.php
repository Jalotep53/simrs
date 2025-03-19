<?php

use frontend\models\RiwayatPenelitian;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatPenelitianSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Riwayat Penelitians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="riwayat-penelitian-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Riwayat Penelitian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'jenis_penelitian',
            'peranan',
            'judul_penelitian',
            'judul_jurnal',
            //'tahun',
            //'biaya_penelitian',
            //'asal_dana',
            //'berkas',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, RiwayatPenelitian $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id, 'judul_penelitian' => $model->judul_penelitian, 'tahun' => $model->tahun]);
                 }
            ],
        ],
    ]); ?>


</div>

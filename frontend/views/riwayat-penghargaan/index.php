<?php

use frontend\models\RiwayatPenghargaan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatPenghargaanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Riwayat Penghargaans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="riwayat-penghargaan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Riwayat Penghargaan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'jenis',
            'nama_penghargaan',
            'tanggal',
            'instansi',
            //'pejabat_pemberi',
            //'berkas',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, RiwayatPenghargaan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id, 'nama_penghargaan' => $model->nama_penghargaan, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>

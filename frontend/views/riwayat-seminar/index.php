<?php

use frontend\models\RiwayatSeminar;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatSeminarSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Riwayat Seminars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="riwayat-seminar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Riwayat Seminar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tingkat',
            'jenis',
            'nama_seminar',
            'peranan',
            //'mulai',
            //'selesai',
            //'penyelengara',
            //'tempat',
            //'berkas',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, RiwayatSeminar $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id, 'nama_seminar' => $model->nama_seminar, 'mulai' => $model->mulai]);
                 }
            ],
        ],
    ]); ?>


</div>

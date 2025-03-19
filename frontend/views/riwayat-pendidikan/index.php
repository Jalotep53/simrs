<?php

use frontend\models\RiwayatPendidikan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatPendidikanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Riwayat Pendidikans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="riwayat-pendidikan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Riwayat Pendidikan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pendidikan',
            'sekolah',
            'jurusan',
            'thn_lulus',
            //'kepala',
            //'pendanaan',
            //'keterangan',
            //'status',
            //'berkas',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, RiwayatPendidikan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id, 'pendidikan' => $model->pendidikan, 'sekolah' => $model->sekolah]);
                 }
            ],
        ],
    ]); ?>


</div>

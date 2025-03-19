<?php

use frontend\models\PencapaianKinerjaPegawai;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PencapaianKinerjaPegawaiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pencapaian Kinerja Pegawais';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pencapaian-kinerja-pegawai-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pencapaian Kinerja Pegawai', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'kode_pencapaian',
            'tahun',
            'bulan',
            'keterangan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PencapaianKinerjaPegawai $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id, 'kode_pencapaian' => $model->kode_pencapaian, 'tahun' => $model->tahun, 'bulan' => $model->bulan]);
                 }
            ],
        ],
    ]); ?>


</div>

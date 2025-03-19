<?php

use frontend\models\PcareKegiatanKelompok;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PcareKegiatanKelompokSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pcare Kegiatan Kelompoks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pcare-kegiatan-kelompok-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pcare Kegiatan Kelompok', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'eduId',
            'clubId',
            'namaClub',
            'tglPelayanan',
            'nmKegiatan',
            //'nmKelompok',
            //'materi',
            //'pembicara',
            //'lokasi',
            //'keterangan',
            //'biaya',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PcareKegiatanKelompok $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'eduId' => $model->eduId]);
                 }
            ],
        ],
    ]); ?>


</div>

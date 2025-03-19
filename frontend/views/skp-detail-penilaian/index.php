<?php

use frontend\models\SkpDetailPenilaian;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SkpDetailPenilaianSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Skp Detail Penilaians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skp-detail-penilaian-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Skp Detail Penilaian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nomor_penilaian',
            'kode_kriteria',
            'skala_penilaian',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SkpDetailPenilaian $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nomor_penilaian' => $model->nomor_penilaian, 'kode_kriteria' => $model->kode_kriteria]);
                 }
            ],
        ],
    ]); ?>


</div>

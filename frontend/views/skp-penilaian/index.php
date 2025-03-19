<?php

use frontend\models\SkpPenilaian;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SkpPenilaianSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Skp Penilaians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skp-penilaian-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Skp Penilaian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nomor_penilaian',
            'nik_dinilai',
            'nik_penilai',
            'tanggal',
            'keterangan',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SkpPenilaian $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nomor_penilaian' => $model->nomor_penilaian]);
                 }
            ],
        ],
    ]); ?>


</div>

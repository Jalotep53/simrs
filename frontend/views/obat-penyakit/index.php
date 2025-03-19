<?php

use frontend\models\ObatPenyakit;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ObatPenyakitSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Obat Penyakits';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="obat-penyakit-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Obat Penyakit', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_penyakit',
            'kode_brng',
            'referensi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ObatPenyakit $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_penyakit' => $model->kd_penyakit, 'kode_brng' => $model->kode_brng]);
                 }
            ],
        ],
    ]); ?>


</div>

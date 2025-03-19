<?php

use frontend\models\RujukMasuk;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\RujukMasukSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Rujuk Masuks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rujuk-masuk-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rujuk Masuk', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'perujuk',
            'alamat',
            'no_rujuk',
            'jm_perujuk',
            //'dokter_perujuk',
            //'kd_penyakit',
            //'kategori_rujuk',
            //'keterangan',
            //'no_balasan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, RujukMasuk $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>

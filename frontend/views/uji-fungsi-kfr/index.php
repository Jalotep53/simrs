<?php

use frontend\models\UjiFungsiKfr;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\UjiFungsiKfrSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Uji Fungsi Kfrs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uji-fungsi-kfr-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Uji Fungsi Kfr', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'diagnosis_fungsional',
            'diagnosis_medis',
            'hasil_didapat',
            //'kesimpulan',
            //'rekomedasi',
            //'kd_dokter',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, UjiFungsiKfr $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>

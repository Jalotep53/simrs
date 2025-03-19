<?php

use frontend\models\SuratKewaspadaanKesehatan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SuratKewaspadaanKesehatanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Surat Kewaspadaan Kesehatans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-kewaspadaan-kesehatan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Surat Kewaspadaan Kesehatan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_surat',
            'no_rawat',
            'tanggalperiksa',
            'keluhan_saat_ini',
            'keperluan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SuratKewaspadaanKesehatan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_surat' => $model->no_surat]);
                 }
            ],
        ],
    ]); ?>


</div>

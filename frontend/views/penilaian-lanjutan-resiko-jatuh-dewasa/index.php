<?php

use frontend\models\PenilaianLanjutanResikoJatuhDewasa;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianLanjutanResikoJatuhDewasaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Lanjutan Resiko Jatuh Dewasas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-lanjutan-resiko-jatuh-dewasa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Lanjutan Resiko Jatuh Dewasa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'penilaian_jatuhmorse_skala1',
            'penilaian_jatuhmorse_nilai1',
            'penilaian_jatuhmorse_skala2',
            //'penilaian_jatuhmorse_nilai2',
            //'penilaian_jatuhmorse_skala3',
            //'penilaian_jatuhmorse_nilai3',
            //'penilaian_jatuhmorse_skala4',
            //'penilaian_jatuhmorse_nilai4',
            //'penilaian_jatuhmorse_skala5',
            //'penilaian_jatuhmorse_nilai5',
            //'penilaian_jatuhmorse_skala6',
            //'penilaian_jatuhmorse_nilai6',
            //'penilaian_jatuhmorse_totalnilai',
            //'hasil_skrining',
            //'saran',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenilaianLanjutanResikoJatuhDewasa $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>

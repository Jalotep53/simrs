<?php

use frontend\models\PenilaianLanjutanResikoJatuhPsikiatri;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianLanjutanResikoJatuhPsikiatriSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Lanjutan Resiko Jatuh Psikiatris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-lanjutan-resiko-jatuh-psikiatri-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Lanjutan Resiko Jatuh Psikiatri', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'penilaian_jatuhedmonson_skala1',
            'penilaian_jatuhedmonson_nilai1',
            'penilaian_jatuhedmonson_skala2',
            //'penilaian_jatuhedmonson_nilai2',
            //'penilaian_jatuhedmonson_skala3',
            //'penilaian_jatuhedmonson_nilai3',
            //'penilaian_jatuhedmonson_skala4',
            //'penilaian_jatuhedmonson_nilai4',
            //'penilaian_jatuhedmonson_skala5',
            //'penilaian_jatuhedmonson_nilai5',
            //'penilaian_jatuhedmonson_skala6',
            //'penilaian_jatuhedmonson_nilai6',
            //'penilaian_jatuhedmonson_totalnilai',
            //'hasil_skrining',
            //'saran',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenilaianLanjutanResikoJatuhPsikiatri $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>

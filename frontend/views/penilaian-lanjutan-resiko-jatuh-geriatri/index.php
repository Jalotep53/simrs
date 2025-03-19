<?php

use frontend\models\PenilaianLanjutanResikoJatuhGeriatri;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianLanjutanResikoJatuhGeriatriSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Lanjutan Resiko Jatuh Geriatris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-lanjutan-resiko-jatuh-geriatri-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Lanjutan Resiko Jatuh Geriatri', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'penilaian_jatuh_skala1',
            'penilaian_jatuh_nilai1',
            'penilaian_jatuh_skala2',
            //'penilaian_jatuh_nilai2',
            //'penilaian_jatuh_skala3',
            //'penilaian_jatuh_nilai3',
            //'penilaian_jatuh_skala4',
            //'penilaian_jatuh_nilai4',
            //'penilaian_jatuh_skala5',
            //'penilaian_jatuh_nilai5',
            //'penilaian_jatuh_skala6',
            //'penilaian_jatuh_nilai6',
            //'penilaian_jatuh_skala7',
            //'penilaian_jatuh_nilai7',
            //'penilaian_jatuh_skala8',
            //'penilaian_jatuh_nilai8',
            //'penilaian_jatuh_skala9',
            //'penilaian_jatuh_nilai9',
            //'penilaian_jatuh_skala10',
            //'penilaian_jatuh_nilai10',
            //'penilaian_jatuh_skala11',
            //'penilaian_jatuh_nilai11',
            //'penilaian_jatuh_totalnilai',
            //'hasil_skrining',
            //'saran',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenilaianLanjutanResikoJatuhGeriatri $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>

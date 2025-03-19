<?php

use frontend\models\SuratPernyataanPasienUmum;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPernyataanPasienUmumSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Surat Pernyataan Pasien Umums';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-pernyataan-pasien-umum-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Surat Pernyataan Pasien Umum', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_surat',
            'no_rawat',
            'tanggal',
            'nama_pj',
            'no_ktppj',
            //'tempat_lahirpj',
            //'lahirpj',
            //'jkpj',
            //'alamatpj',
            //'hubungan',
            //'no_telp',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SuratPernyataanPasienUmum $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_surat' => $model->no_surat]);
                 }
            ],
        ],
    ]); ?>


</div>

<?php

use frontend\models\SuratPersetujuanUmum;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPersetujuanUmumSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Surat Persetujuan Umums';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-persetujuan-umum-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Surat Persetujuan Umum', ['create'], ['class' => 'btn btn-success']) ?>
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
            'pengobatan_kepada',
            'nilai_kepercayaan',
            //'nama_pj',
            //'umur_pj',
            //'no_ktppj',
            //'jkpj',
            //'bertindak_atas',
            //'no_telp',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SuratPersetujuanUmum $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_surat' => $model->no_surat]);
                 }
            ],
        ],
    ]); ?>


</div>

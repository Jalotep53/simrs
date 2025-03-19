<?php

use frontend\models\SuratPenolakanAnjuranMedis;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPenolakanAnjuranMedisSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Surat Penolakan Anjuran Medis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-penolakan-anjuran-medis-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Surat Penolakan Anjuran Medis', ['create'], ['class' => 'btn btn-success']) ?>
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
            'hubungan',
            'nama_pj',
            //'umur_pj',
            //'no_ktppj',
            //'jkpj',
            //'no_telp',
            //'kode_penolakan',
            //'alasan_penolakan',
            //'informasi_risiko_penolakan',
            //'nik',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SuratPenolakanAnjuranMedis $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_surat' => $model->no_surat]);
                 }
            ],
        ],
    ]); ?>


</div>

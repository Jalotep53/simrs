<?php

use frontend\models\PemeliharaanGedung;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PemeliharaanGedungSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pemeliharaan Gedungs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemeliharaan-gedung-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pemeliharaan Gedung', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_pemeliharaan',
            'tanggal',
            'uraian_kegiatan',
            'nip',
            'pelaksana',
            //'biaya',
            //'jenis_pemeliharaan',
            //'tindak_lanjut',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PemeliharaanGedung $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_pemeliharaan' => $model->no_pemeliharaan]);
                 }
            ],
        ],
    ]); ?>


</div>

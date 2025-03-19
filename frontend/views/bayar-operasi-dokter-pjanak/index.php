<?php

use frontend\models\BayarOperasiDokterPjanak;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BayarOperasiDokterPjanakSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bayar Operasi Dokter Pjanaks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bayar-operasi-dokter-pjanak-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bayar Operasi Dokter Pjanak', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_bayar',
            'no_rawat',
            'kode_paket',
            'tgl_operasi',
            'biaya_dokter_pjanak',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BayarOperasiDokterPjanak $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_bayar' => $model->no_bayar, 'no_rawat' => $model->no_rawat, 'kode_paket' => $model->kode_paket, 'tgl_operasi' => $model->tgl_operasi]);
                 }
            ],
        ],
    ]); ?>


</div>

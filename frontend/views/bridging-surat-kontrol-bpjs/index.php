<?php

use frontend\models\BridgingSuratKontrolBpjs;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingSuratKontrolBpjsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bridging Surat Kontrol Bpjs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bridging-surat-kontrol-bpjs-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bridging Surat Kontrol Bpjs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_sep',
            'tgl_surat',
            'no_surat',
            'tgl_rencana',
            'kd_dokter_bpjs',
            //'nm_dokter_bpjs',
            //'kd_poli_bpjs',
            //'nm_poli_bpjs',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BridgingSuratKontrolBpjs $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_surat' => $model->no_surat]);
                 }
            ],
        ],
    ]); ?>


</div>

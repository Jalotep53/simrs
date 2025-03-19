<?php

use frontend\models\BridgingSuratPriBpjs;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingSuratPriBpjsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bridging Surat Pri Bpjs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bridging-surat-pri-bpjs-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bridging Surat Pri Bpjs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'no_kartu',
            'tgl_surat',
            'no_surat',
            'tgl_rencana',
            //'kd_dokter_bpjs',
            //'nm_dokter_bpjs',
            //'kd_poli_bpjs',
            //'nm_poli_bpjs',
            //'diagnosa',
            //'no_sep',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BridgingSuratPriBpjs $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_surat' => $model->no_surat]);
                 }
            ],
        ],
    ]); ?>


</div>

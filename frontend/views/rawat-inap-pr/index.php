<?php

use frontend\models\RawatInapPr;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\RawatInapPrSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Rawat Inap Prs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rawat-inap-pr-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rawat Inap Pr', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'kd_jenis_prw',
            'nip',
            'tgl_perawatan',
            'jam_rawat',
            //'material',
            //'bhp',
            //'tarif_tindakanpr',
            //'kso',
            //'menejemen',
            //'biaya_rawat',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, RawatInapPr $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'kd_jenis_prw' => $model->kd_jenis_prw, 'nip' => $model->nip, 'tgl_perawatan' => $model->tgl_perawatan, 'jam_rawat' => $model->jam_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>

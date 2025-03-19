<?php

use frontend\models\KeslingLimbahB3medis;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\KeslingLimbahB3medisSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kesling Limbah B3medis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kesling-limbah-b3medis-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kesling Limbah B3medis', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nip',
            'tanggal',
            'jmllimbah',
            'tujuan_penyerahan',
            'bukti_dokumen',
            //'sisa_di_tps',
            //'keterangan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, KeslingLimbahB3medis $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nip' => $model->nip, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>

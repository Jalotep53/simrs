<?php

use frontend\models\KeslingLimbahB3medisCair;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\KeslingLimbahB3medisCairSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kesling Limbah B3medis Cairs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kesling-limbah-b3medis-cair-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kesling Limbah B3medis Cair', ['create'], ['class' => 'btn btn-success']) ?>
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
                'urlCreator' => function ($action, KeslingLimbahB3medisCair $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nip' => $model->nip, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>

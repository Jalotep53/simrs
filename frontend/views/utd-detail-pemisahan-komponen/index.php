<?php

use frontend\models\UtdDetailPemisahanKomponen;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\UtdDetailPemisahanKomponenSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Utd Detail Pemisahan Komponens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utd-detail-pemisahan-komponen-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Utd Detail Pemisahan Komponen', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_donor',
            'no_kantong',
            'kode_komponen',
            'tanggal_kadaluarsa',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, UtdDetailPemisahanKomponen $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_kantong' => $model->no_kantong]);
                 }
            ],
        ],
    ]); ?>


</div>

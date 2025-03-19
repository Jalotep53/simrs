<?php

use frontend\models\UtdPemisahanKomponen;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPemisahanKomponenSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Utd Pemisahan Komponens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utd-pemisahan-komponen-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Utd Pemisahan Komponen', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_donor',
            'tanggal',
            'dinas',
            'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, UtdPemisahanKomponen $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_donor' => $model->no_donor]);
                 }
            ],
        ],
    ]); ?>


</div>

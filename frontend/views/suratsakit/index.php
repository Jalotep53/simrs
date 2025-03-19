<?php

use frontend\models\Suratsakit;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SuratsakitSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Suratsakits';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suratsakit-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Suratsakit', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_surat',
            'no_rawat',
            'tanggalawal',
            'tanggalakhir',
            'lamasakit',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Suratsakit $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_surat' => $model->no_surat]);
                 }
            ],
        ],
    ]); ?>


</div>

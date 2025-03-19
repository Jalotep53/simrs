<?php

use frontend\models\SkriningNutrisiLansia;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SkriningNutrisiLansiaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Skrining Nutrisi Lansias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skrining-nutrisi-lansia-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Skrining Nutrisi Lansia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'td',
            'hr',
            'rr',
            //'suhu',
            //'bb',
            //'tbpb',
            //'spo2',
            //'alergi',
            //'sg1',
            //'nilai1',
            //'sg2',
            //'nilai2',
            //'sg3',
            //'nilai3',
            //'sg4',
            //'nilai4',
            //'sg5',
            //'nilai5',
            //'sg6',
            //'nilai6',
            //'total_hasil',
            //'skor_nutrisi',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SkriningNutrisiLansia $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>

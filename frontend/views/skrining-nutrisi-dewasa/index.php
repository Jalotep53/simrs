<?php

use frontend\models\SkriningNutrisiDewasa;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SkriningNutrisiDewasaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Skrining Nutrisi Dewasas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skrining-nutrisi-dewasa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Skrining Nutrisi Dewasa', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'total_hasil',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SkriningNutrisiDewasa $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>

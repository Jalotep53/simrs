<?php

use frontend\models\ChecklistKriteriaMasukHcu;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ChecklistKriteriaMasukHcuSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Checklist Kriteria Masuk Hcus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="checklist-kriteria-masuk-hcu-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Checklist Kriteria Masuk Hcu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'kardiologi1',
            'kardiologi2',
            'kardiologi3',
            //'kardiologi4',
            //'kardiologi5',
            //'kardiologi6',
            //'pernapasan1',
            //'pernapasan2',
            //'pernapasan3',
            //'syaraf1',
            //'syaraf2',
            //'syaraf3',
            //'syaraf4',
            //'pencernaan1',
            //'pencernaan2',
            //'pencernaan3',
            //'pencernaan4',
            //'pembedahan1',
            //'pembedahan2',
            //'hematologi1',
            //'hematologi2',
            //'infeksi',
            //'nik',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ChecklistKriteriaMasukHcu $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>

<?php

use frontend\models\ChecklistKriteriaKeluarHcu;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ChecklistKriteriaKeluarHcuSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Checklist Kriteria Keluar Hcus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="checklist-kriteria-keluar-hcu-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Checklist Kriteria Keluar Hcu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'kriteria1',
            'kriteria2',
            'kriteria3',
            //'kriteria4',
            //'kriteria5',
            //'kriteria6',
            //'kriteria7',
            //'kriteria8',
            //'kriteria9',
            //'kriteria10',
            //'kriteria11',
            //'kriteria12',
            //'nik',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ChecklistKriteriaKeluarHcu $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>

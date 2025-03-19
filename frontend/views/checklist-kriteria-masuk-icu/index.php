<?php

use frontend\models\ChecklistKriteriaMasukIcu;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ChecklistKriteriaMasukIcuSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Checklist Kriteria Masuk Icus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="checklist-kriteria-masuk-icu-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Checklist Kriteria Masuk Icu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'prioritas1_1',
            'prioritas1_2',
            'prioritas1_3',
            //'prioritas1_4',
            //'prioritas1_5',
            //'prioritas1_6',
            //'prioritas2_1',
            //'prioritas2_2',
            //'prioritas2_3',
            //'prioritas2_4',
            //'prioritas2_5',
            //'prioritas2_6',
            //'prioritas2_7',
            //'prioritas2_8',
            //'prioritas3_1',
            //'prioritas3_2',
            //'prioritas3_3',
            //'prioritas3_4',
            //'kriteria_fisiologis_tanda_vital_1',
            //'kriteria_fisiologis_tanda_vital_2',
            //'kriteria_fisiologis_tanda_vital_3',
            //'kriteria_fisiologis_tanda_vital_4',
            //'kriteria_fisiologis_tanda_vital_5',
            //'kriteria_fisiologis_laborat_1',
            //'kriteria_fisiologis_laborat_2',
            //'kriteria_fisiologis_laborat_3',
            //'kriteria_fisiologis_laborat_4',
            //'kriteria_fisiologis_laborat_5',
            //'kriteria_fisiologis_laborat_6',
            //'kriteria_fisiologis_radiologi_1',
            //'kriteria_fisiologis_radiologi_2',
            //'kriteria_fisiologis_klinis_1',
            //'kriteria_fisiologis_klinis_2',
            //'kriteria_fisiologis_klinis_3',
            //'kriteria_fisiologis_klinis_4',
            //'kriteria_fisiologis_klinis_5',
            //'kriteria_fisiologis_klinis_6',
            //'kriteria_fisiologis_klinis_7',
            //'kriteria_fisiologis_klinis_8',
            //'nik',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ChecklistKriteriaMasukIcu $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>

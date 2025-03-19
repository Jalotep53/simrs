<?php

use frontend\models\SatuSehatDiagnosticreportRadiologi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatDiagnosticreportRadiologiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Satu Sehat Diagnosticreport Radiologis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-diagnosticreport-radiologi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Satu Sehat Diagnosticreport Radiologi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'noorder',
            'kd_jenis_prw',
            'id_diagnosticreport',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SatuSehatDiagnosticreportRadiologi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'noorder' => $model->noorder, 'kd_jenis_prw' => $model->kd_jenis_prw]);
                 }
            ],
        ],
    ]); ?>


</div>

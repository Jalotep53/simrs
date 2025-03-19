<?php

use frontend\models\SatuSehatCondition;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatConditionSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Satu Sehat Conditions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-condition-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Satu Sehat Condition', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'kd_penyakit',
            'status',
            'id_condition',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SatuSehatCondition $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'kd_penyakit' => $model->kd_penyakit, 'status' => $model->status]);
                 }
            ],
        ],
    ]); ?>


</div>

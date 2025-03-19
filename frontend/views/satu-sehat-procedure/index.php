<?php

use frontend\models\SatuSehatProcedure;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatProcedureSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Satu Sehat Procedures';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-procedure-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Satu Sehat Procedure', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'kode',
            'status',
            'id_procedure',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SatuSehatProcedure $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'kode' => $model->kode, 'status' => $model->status]);
                 }
            ],
        ],
    ]); ?>


</div>

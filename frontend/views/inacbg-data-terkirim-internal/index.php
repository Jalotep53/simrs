<?php

use frontend\models\InacbgDataTerkirimInternal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\InacbgDataTerkirimInternalSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Inacbg Data Terkirim Internals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inacbg-data-terkirim-internal-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Inacbg Data Terkirim Internal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_sep',
            'nik',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, InacbgDataTerkirimInternal $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_sep' => $model->no_sep]);
                 }
            ],
        ],
    ]); ?>


</div>

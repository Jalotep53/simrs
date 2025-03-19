<?php

use frontend\models\RujukanInternalPoli;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\RujukanInternalPoliSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Rujukan Internal Polis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rujukan-internal-poli-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rujukan Internal Poli', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'kd_dokter',
            'kd_poli',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, RujukanInternalPoli $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'kd_dokter' => $model->kd_dokter]);
                 }
            ],
        ],
    ]); ?>


</div>

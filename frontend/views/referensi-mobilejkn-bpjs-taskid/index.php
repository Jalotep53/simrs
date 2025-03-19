<?php

use frontend\models\ReferensiMobilejknBpjsTaskid;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ReferensiMobilejknBpjsTaskidSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Referensi Mobilejkn Bpjs Taskids';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="referensi-mobilejkn-bpjs-taskid-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Referensi Mobilejkn Bpjs Taskid', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'taskid',
            'waktu',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ReferensiMobilejknBpjsTaskid $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'taskid' => $model->taskid]);
                 }
            ],
        ],
    ]); ?>


</div>

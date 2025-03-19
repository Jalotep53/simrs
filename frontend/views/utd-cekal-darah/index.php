<?php

use frontend\models\UtdCekalDarah;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\UtdCekalDarahSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Utd Cekal Darahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utd-cekal-darah-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Utd Cekal Darah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_donor',
            'tanggal',
            'dinas',
            'petugas_pemusnahan',
            'keterangan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, UtdCekalDarah $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_donor' => $model->no_donor]);
                 }
            ],
        ],
    ]); ?>


</div>

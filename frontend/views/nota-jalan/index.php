<?php

use frontend\models\NotaJalan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\NotaJalanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Nota Jalans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nota-jalan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Nota Jalan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'no_nota',
            'tanggal',
            'jam',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, NotaJalan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>

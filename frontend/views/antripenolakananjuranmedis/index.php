<?php

use frontend\models\Antripenolakananjuranmedis;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\AntripenolakananjuranmedisSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Antripenolakananjuranmedis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="antripenolakananjuranmedis-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Antripenolakananjuranmedis', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_surat',
            'no_rawat',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Antripenolakananjuranmedis $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_surat' => $model->no_surat]);
                 }
            ],
        ],
    ]); ?>


</div>

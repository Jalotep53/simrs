<?php

use frontend\models\SuratIndeks;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SuratIndeksSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Surat Indeks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-indeks-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Surat Indeks', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd',
            'indeks',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SuratIndeks $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd' => $model->kd]);
                 }
            ],
        ],
    ]); ?>


</div>

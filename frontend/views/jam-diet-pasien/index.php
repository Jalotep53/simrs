<?php

use frontend\models\JamDietPasien;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\JamDietPasienSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Jam Diet Pasiens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jam-diet-pasien-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jam Diet Pasien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'waktu',
            'jam',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, JamDietPasien $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'waktu' => $model->waktu]);
                 }
            ],
        ],
    ]); ?>


</div>

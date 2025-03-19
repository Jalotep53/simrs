<?php

use frontend\models\SuratRak;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SuratRakSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Surat Raks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-rak-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Surat Rak', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd',
            'rak',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SuratRak $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd' => $model->kd]);
                 }
            ],
        ],
    ]); ?>


</div>

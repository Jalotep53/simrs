<?php

use frontend\models\PerpustakaanRuang;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanRuangSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Perpustakaan Ruangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perpustakaan-ruang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Perpustakaan Ruang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_ruang',
            'nm_ruang',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PerpustakaanRuang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_ruang' => $model->kd_ruang]);
                 }
            ],
        ],
    ]); ?>


</div>

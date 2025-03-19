<?php

use frontend\models\RuangOk;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\RuangOkSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ruang Oks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ruang-ok-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ruang Ok', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_ruang_ok',
            'nm_ruang_ok',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, RuangOk $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_ruang_ok' => $model->kd_ruang_ok]);
                 }
            ],
        ],
    ]); ?>


</div>

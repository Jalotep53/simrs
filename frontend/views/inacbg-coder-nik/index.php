<?php

use frontend\models\InacbgCoderNik;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\InacbgCoderNikSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Inacbg Coder Niks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inacbg-coder-nik-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Inacbg Coder Nik', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nik',
            'no_ik',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, InacbgCoderNik $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nik' => $model->nik]);
                 }
            ],
        ],
    ]); ?>


</div>

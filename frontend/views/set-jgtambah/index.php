<?php

use frontend\models\SetJgtambah;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SetJgtambahSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Set Jgtambahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-jgtambah-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Set Jgtambah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tnj',
            'pendidikan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SetJgtambah $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'pendidikan' => $model->pendidikan]);
                 }
            ],
        ],
    ]); ?>


</div>

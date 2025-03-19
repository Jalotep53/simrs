<?php

use frontend\models\MasterTriaseMacamKasus;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\MasterTriaseMacamKasusSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Master Triase Macam Kasuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-triase-macam-kasus-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Master Triase Macam Kasus', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_kasus',
            'macam_kasus',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MasterTriaseMacamKasus $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_kasus' => $model->kode_kasus]);
                 }
            ],
        ],
    ]); ?>


</div>

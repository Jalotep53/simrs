<?php

use frontend\models\AkunBayar;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\AkunBayarSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Akun Bayars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akun-bayar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Akun Bayar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama_bayar',
            'kd_rek',
            'ppn',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AkunBayar $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nama_bayar' => $model->nama_bayar]);
                 }
            ],
        ],
    ]); ?>


</div>

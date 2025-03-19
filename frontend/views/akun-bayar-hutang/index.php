<?php

use frontend\models\AkunBayarHutang;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\AkunBayarHutangSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Akun Bayar Hutangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akun-bayar-hutang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Akun Bayar Hutang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama_bayar',
            'kd_rek',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AkunBayarHutang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nama_bayar' => $model->nama_bayar]);
                 }
            ],
        ],
    ]); ?>


</div>

<?php

use frontend\models\AkunPiutang;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\AkunPiutangSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Akun Piutangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akun-piutang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Akun Piutang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama_bayar',
            'kd_rek',
            'kd_pj',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AkunPiutang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nama_bayar' => $model->nama_bayar]);
                 }
            ],
        ],
    ]); ?>


</div>

<?php

use frontend\models\BuktiPenagihanPiutang;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BuktiPenagihanPiutangSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bukti Penagihan Piutangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bukti-penagihan-piutang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bukti Penagihan Piutang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_tagihan',
            'photo',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BuktiPenagihanPiutang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_tagihan' => $model->no_tagihan]);
                 }
            ],
        ],
    ]); ?>


</div>

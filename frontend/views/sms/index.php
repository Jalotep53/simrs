<?php

use frontend\models\Sms;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SmsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Sms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sms-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sms', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pesan',
            'sms_masuk',
            'no_hp',
            'pdu_pesan',
            'encoding',
            //'id_gateway',
            //'tgl_sms',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Sms $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pesan' => $model->id_pesan]);
                 }
            ],
        ],
    ]); ?>


</div>

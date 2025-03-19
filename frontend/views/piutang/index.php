<?php

use frontend\models\Piutang;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PiutangSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Piutangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="piutang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Piutang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nota_piutang',
            'tgl_piutang',
            'nip',
            'no_rkm_medis',
            'nm_pasien',
            //'catatan',
            //'jns_jual',
            //'ongkir',
            //'uangmuka',
            //'sisapiutang',
            //'status',
            //'tgltempo',
            //'kd_bangsal',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Piutang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nota_piutang' => $model->nota_piutang]);
                 }
            ],
        ],
    ]); ?>


</div>

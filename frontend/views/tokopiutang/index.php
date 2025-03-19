<?php

use frontend\models\Tokopiutang;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TokopiutangSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tokopiutangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tokopiutang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tokopiutang', ['create'], ['class' => 'btn btn-success']) ?>
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
            'no_member',
            'nm_member',
            //'catatan',
            //'jns_jual',
            //'ongkir',
            //'uangmuka',
            //'sisapiutang',
            //'tgltempo',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tokopiutang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nota_piutang' => $model->nota_piutang]);
                 }
            ],
        ],
    ]); ?>


</div>

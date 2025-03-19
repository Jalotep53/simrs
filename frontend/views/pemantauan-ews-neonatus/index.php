<?php

use frontend\models\PemantauanEwsNeonatus;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PemantauanEwsNeonatusSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pemantauan Ews Neonatuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemantauan-ews-neonatus-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pemantauan Ews Neonatus', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'parameter1',
            'skor1',
            'parameter2',
            //'skor2',
            //'parameter3',
            //'skor3',
            //'parameter4',
            //'skor4',
            //'parameter5',
            //'skor5',
            //'parameter6',
            //'skor6',
            //'parameter7',
            //'skor7',
            //'parameter8',
            //'skor8',
            //'skor_total',
            //'parameter_total',
            //'code_blue',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PemantauanEwsNeonatus $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>

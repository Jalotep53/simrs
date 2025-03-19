<?php

use frontend\models\PenilaianRisikoJatuhNeonatus;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianRisikoJatuhNeonatusSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Risiko Jatuh Neonatuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-risiko-jatuh-neonatus-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Risiko Jatuh Neonatus', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'intervensi1',
            'intervensi2',
            'intervensi3',
            //'intervensi4',
            //'intervensi5',
            //'intervensi6',
            //'intervensi7',
            //'intervensi8',
            //'intervensi9',
            //'edukasi1',
            //'edukasi2',
            //'edukasi3',
            //'edukasi4',
            //'edukasi5',
            //'sasaran1',
            //'sasaran2',
            //'sasaran3',
            //'sasaran4',
            //'evaluasi1',
            //'evaluasi2',
            //'evaluasi3',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenilaianRisikoJatuhNeonatus $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>

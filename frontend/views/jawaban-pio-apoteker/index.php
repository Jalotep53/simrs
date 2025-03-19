<?php

use frontend\models\JawabanPioApoteker;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\JawabanPioApotekerSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Jawaban Pio Apotekers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jawaban-pio-apoteker-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jawaban Pio Apoteker', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_permintaan',
            'tanggal_jawab',
            'metode',
            'penyampaian_jawaban',
            'jawaban',
            //'referensi',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, JawabanPioApoteker $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_permintaan' => $model->no_permintaan]);
                 }
            ],
        ],
    ]); ?>


</div>

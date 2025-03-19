<?php

use frontend\models\SuratKeluarSetNomor;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SuratKeluarSetNomorSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Surat Keluar Set Nomors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-keluar-set-nomor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Surat Keluar Set Nomor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_no_surat',
            'jenis_surat',
            'digit_1',
            'digit_2',
            'digit_3',
            //'digit_4',
            //'digit_5',
            //'digit_6',
            //'digit_7',
            //'digit_8',
            //'digit_9',
            //'digit_10',
            //'digit_11',
            //'digit_12',
            //'digit_13',
            //'digit_14',
            //'digit_15',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SuratKeluarSetNomor $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_no_surat' => $model->id_no_surat]);
                 }
            ],
        ],
    ]); ?>


</div>

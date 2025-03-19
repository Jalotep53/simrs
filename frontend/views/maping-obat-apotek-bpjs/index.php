<?php

use frontend\models\MapingObatApotekBpjs;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\MapingObatApotekBpjsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Maping Obat Apotek Bpjs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maping-obat-apotek-bpjs-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Maping Obat Apotek Bpjs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_brng',
            'kode_brng_apotek_bpjs',
            'nama_brng_apotek_bpjs',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MapingObatApotekBpjs $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_brng_apotek_bpjs' => $model->kode_brng_apotek_bpjs]);
                 }
            ],
        ],
    ]); ?>


</div>

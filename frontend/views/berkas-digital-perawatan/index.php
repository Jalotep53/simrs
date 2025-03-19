<?php

use frontend\models\BerkasDigitalPerawatan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\BerkasDigitalPerawatanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Berkas Digital Perawatans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="berkas-digital-perawatan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Berkas Digital Perawatan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'kode',
            'lokasi_file',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BerkasDigitalPerawatan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'kode' => $model->kode, 'lokasi_file' => $model->lokasi_file]);
                 }
            ],
        ],
    ]); ?>


</div>

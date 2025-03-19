<?php

use frontend\models\ZisKeteranganKursiRumahPenerimaDankes;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ZisKeteranganKursiRumahPenerimaDankesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Zis Keterangan Kursi Rumah Penerima Dankes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zis-keterangan-kursi-rumah-penerima-dankes-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Zis Keterangan Kursi Rumah Penerima Dankes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode',
            'keterangan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ZisKeteranganKursiRumahPenerimaDankes $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode' => $model->kode]);
                 }
            ],
        ],
    ]); ?>


</div>

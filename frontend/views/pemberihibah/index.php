<?php

use frontend\models\Pemberihibah;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PemberihibahSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pemberihibahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemberihibah-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pemberihibah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_pemberi',
            'nama_pemberi',
            'alamat',
            'kota',
            'no_telp',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pemberihibah $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_pemberi' => $model->kode_pemberi]);
                 }
            ],
        ],
    ]); ?>


</div>

<?php

use frontend\models\HasilPemeriksaanUsgUrologiGambar;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\HasilPemeriksaanUsgUrologiGambarSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Hasil Pemeriksaan Usg Urologi Gambars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasil-pemeriksaan-usg-urologi-gambar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Hasil Pemeriksaan Usg Urologi Gambar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'photo',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, HasilPemeriksaanUsgUrologiGambar $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>

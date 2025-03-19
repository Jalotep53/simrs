<?php

use frontend\models\PerpustakaanPenerbit;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanPenerbitSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Perpustakaan Penerbits';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perpustakaan-penerbit-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Perpustakaan Penerbit', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_penerbit',
            'nama_penerbit',
            'alamat_penerbit',
            'no_telp',
            'email:email',
            //'website_penerbit',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PerpustakaanPenerbit $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_penerbit' => $model->kode_penerbit]);
                 }
            ],
        ],
    ]); ?>


</div>

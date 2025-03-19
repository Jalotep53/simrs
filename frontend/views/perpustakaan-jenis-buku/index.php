<?php

use frontend\models\PerpustakaanJenisBuku;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanJenisBukuSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Perpustakaan Jenis Bukus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perpustakaan-jenis-buku-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Perpustakaan Jenis Buku', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_jenis',
            'nama_jenis',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PerpustakaanJenisBuku $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_jenis' => $model->id_jenis]);
                 }
            ],
        ],
    ]); ?>


</div>

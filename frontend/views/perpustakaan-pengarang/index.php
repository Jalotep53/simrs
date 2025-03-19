<?php

use frontend\models\PerpustakaanPengarang;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanPengarangSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Perpustakaan Pengarangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perpustakaan-pengarang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Perpustakaan Pengarang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_pengarang',
            'nama_pengarang',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PerpustakaanPengarang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_pengarang' => $model->kode_pengarang]);
                 }
            ],
        ],
    ]); ?>


</div>

<?php

use frontend\models\PenjabDokumenKerjasama;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenjabDokumenKerjasamaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penjab Dokumen Kerjasamas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penjab-dokumen-kerjasama-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penjab Dokumen Kerjasama', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_pj',
            'kerjasama_berakhir',
            'photo',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenjabDokumenKerjasama $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_pj' => $model->kd_pj]);
                 }
            ],
        ],
    ]); ?>


</div>

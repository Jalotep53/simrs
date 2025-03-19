<?php

use frontend\models\AkunAsetInventaris;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\AkunAsetInventarisSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Akun Aset Inventaris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akun-aset-inventaris-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Akun Aset Inventaris', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_rek',
            'id_jenis',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AkunAsetInventaris $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_jenis' => $model->id_jenis]);
                 }
            ],
        ],
    ]); ?>


</div>

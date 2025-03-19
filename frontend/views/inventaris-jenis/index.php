<?php

use frontend\models\InventarisJenis;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisJenisSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Inventaris Jenis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventaris-jenis-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Inventaris Jenis', ['create'], ['class' => 'btn btn-success']) ?>
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
                'urlCreator' => function ($action, InventarisJenis $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_jenis' => $model->id_jenis]);
                 }
            ],
        ],
    ]); ?>


</div>

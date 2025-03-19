<?php

use frontend\models\InventarisProdusen;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisProdusenSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Inventaris Produsens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventaris-produsen-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Inventaris Produsen', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_produsen',
            'nama_produsen',
            'alamat_produsen',
            'no_telp',
            'email:email',
            //'website_produsen',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, InventarisProdusen $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_produsen' => $model->kode_produsen]);
                 }
            ],
        ],
    ]); ?>


</div>

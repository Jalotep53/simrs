<?php

use frontend\models\ObatbhpOk;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ObatbhpOkSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Obatbhp Oks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="obatbhp-ok-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Obatbhp Ok', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_obat',
            'nm_obat',
            'kode_sat',
            'hargasatuan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ObatbhpOk $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_obat' => $model->kd_obat]);
                 }
            ],
        ],
    ]); ?>


</div>

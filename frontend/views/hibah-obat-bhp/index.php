<?php

use frontend\models\HibahObatBhp;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\HibahObatBhpSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Hibah Obat Bhps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hibah-obat-bhp-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Hibah Obat Bhp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_hibah',
            'kode_pemberi',
            'nip',
            'tgl_hibah',
            'totalhibah',
            //'totalnilai',
            //'kd_bangsal',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, HibahObatBhp $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_hibah' => $model->no_hibah]);
                 }
            ],
        ],
    ]); ?>


</div>

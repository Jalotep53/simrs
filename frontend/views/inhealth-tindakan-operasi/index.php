<?php

use frontend\models\InhealthTindakanOperasi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\InhealthTindakanOperasiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Inhealth Tindakan Operasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inhealth-tindakan-operasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Inhealth Tindakan Operasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_paket',
            'kd_inhealth',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, InhealthTindakanOperasi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_paket' => $model->kode_paket]);
                 }
            ],
        ],
    ]); ?>


</div>

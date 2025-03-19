<?php

use frontend\models\InhealthMapingDokter;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\InhealthMapingDokterSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Inhealth Maping Dokters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inhealth-maping-dokter-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Inhealth Maping Dokter', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_dokter',
            'kd_inhealth',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, InhealthMapingDokter $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_dokter' => $model->kd_dokter]);
                 }
            ],
        ],
    ]); ?>


</div>

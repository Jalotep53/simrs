<?php

use frontend\models\SatuSehatServicerequestLabMb;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatServicerequestLabMbSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Satu Sehat Servicerequest Lab Mbs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-servicerequest-lab-mb-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Satu Sehat Servicerequest Lab Mb', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'noorder',
            'kd_jenis_prw',
            'id_template',
            'id_servicerequest',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SatuSehatServicerequestLabMb $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'noorder' => $model->noorder, 'kd_jenis_prw' => $model->kd_jenis_prw, 'id_template' => $model->id_template]);
                 }
            ],
        ],
    ]); ?>


</div>

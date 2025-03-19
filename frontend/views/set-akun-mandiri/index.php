<?php

use frontend\models\SetAkunMandiri;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SetAkunMandiriSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Set Akun Mandiris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-akun-mandiri-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Set Akun Mandiri', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_rek',
            'kd_rek_biaya',
            'username',
            'password',
            'client_id',
            //'client_secret',
            //'kode_rs',
            //'kode_mcm',
            //'no_rekening',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SetAkunMandiri $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_rek' => $model->kd_rek]);
                 }
            ],
        ],
    ]); ?>


</div>

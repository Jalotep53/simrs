<?php

use frontend\models\SetAkunBankjateng;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SetAkunBankjatengSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Set Akun Bankjatengs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-akun-bankjateng-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Set Akun Bankjateng', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_rek',
            'usere',
            'passworde',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SetAkunBankjateng $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_rek' => $model->kd_rek]);
                 }
            ],
        ],
    ]); ?>


</div>

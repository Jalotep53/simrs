<?php

use frontend\models\IpsrsTitipFaktur;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\IpsrsTitipFakturSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ipsrs Titip Fakturs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ipsrs-titip-faktur-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ipsrs Titip Faktur', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_tagihan',
            'tanggal',
            'nip',
            'keterangan',
            'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, IpsrsTitipFaktur $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_tagihan' => $model->no_tagihan]);
                 }
            ],
        ],
    ]); ?>


</div>

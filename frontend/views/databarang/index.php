<?php

use frontend\models\Databarang;
use frontend\models\ObatBmhpOksigen;
use frontend\models\KatObatBmhpOksigen;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DatabarangSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Databarang';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="databarang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Databarang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_brng',
            'nama_brng',
            
           
            
            [
          'class' => 'yii\grid\ActionColumn',
          'header' => 'Actions',
          'headerOptions' => ['style' => 'color:#337ab7'],
          'template' => '{view}{update}{kategori}',
          
          'urlCreator' => function ($action, $model, $key, $index) {
            if ($action === 'view') {
                $url ='index.php?r=databarang/view&kode_brng='.$model->kode_brng;
                return $url;
            }

            if ($action === 'update') {
                $url ='index.php?r=databarang/update&kode_brng='.$model->kode_brng;
                return $url;
            }
            if ($action === 'delete') {
                $url ='index.php?r=databarang/delete&kode_brng='.$model->kode_brng;
                return $url;
            }
            if ($action === 'kategori') {
                $url ='index.php?r=databarang/view&kode_brng='.$model->kode_brng;
                return $url;
            }

          }
          ],
        ],
    ]); ?>


</div>

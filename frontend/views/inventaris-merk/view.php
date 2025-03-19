<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisMerk $model */

$this->title = $model->id_merk;
$this->params['breadcrumbs'][] = ['label' => 'Inventaris Merks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="inventaris-merk-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_merk' => $model->id_merk], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_merk' => $model->id_merk], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_merk',
            'nama_merk',
        ],
    ]) ?>

</div>

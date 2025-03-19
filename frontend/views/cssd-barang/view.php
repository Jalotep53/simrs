<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\CssdBarang $model */

$this->title = $model->no_inventaris;
$this->params['breadcrumbs'][] = ['label' => 'Cssd Barangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cssd-barang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_inventaris' => $model->no_inventaris], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_inventaris' => $model->no_inventaris], [
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
            'no_inventaris',
            'jenis_barang',
        ],
    ]) ?>

</div>

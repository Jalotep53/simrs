<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisProdusen $model */

$this->title = $model->kode_produsen;
$this->params['breadcrumbs'][] = ['label' => 'Inventaris Produsens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="inventaris-produsen-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_produsen' => $model->kode_produsen], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_produsen' => $model->kode_produsen], [
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
            'kode_produsen',
            'nama_produsen',
            'alamat_produsen',
            'no_telp',
            'email:email',
            'website_produsen',
        ],
    ]) ?>

</div>

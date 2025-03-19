<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\IpsrsHibah $model */

$this->title = $model->no_hibah;
$this->params['breadcrumbs'][] = ['label' => 'Ipsrs Hibahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ipsrs-hibah-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_hibah' => $model->no_hibah], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_hibah' => $model->no_hibah], [
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
            'no_hibah',
            'kode_pemberi',
            'nip',
            'tgl_hibah',
            'totalhibah',
            'keterangan',
        ],
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\IpsrsDetailTitipFaktur $model */

$this->title = $model->no_tagihan;
$this->params['breadcrumbs'][] = ['label' => 'Ipsrs Detail Titip Fakturs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ipsrs-detail-titip-faktur-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_tagihan' => $model->no_tagihan, 'no_faktur' => $model->no_faktur], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_tagihan' => $model->no_tagihan, 'no_faktur' => $model->no_faktur], [
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
            'no_tagihan',
            'no_faktur',
        ],
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\MasterAturanPakai $model */

$this->title = $model->aturan;
$this->params['breadcrumbs'][] = ['label' => 'Master Aturan Pakais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="master-aturan-pakai-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'aturan' => $model->aturan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'aturan' => $model->aturan], [
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
            'aturan',
        ],
    ]) ?>

</div>

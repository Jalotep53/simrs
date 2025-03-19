<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SetLemburhb $model */

$this->title = $model->tnj;
$this->params['breadcrumbs'][] = ['label' => 'Set Lemburhbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="set-lemburhb-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'tnj' => $model->tnj], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'tnj' => $model->tnj], [
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
            'tnj',
        ],
    ]) ?>

</div>

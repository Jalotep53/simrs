<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Propinsi $model */

$this->title = $model->kd_prop;
$this->params['breadcrumbs'][] = ['label' => 'Propinsis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="propinsi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kd_prop' => $model->kd_prop], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kd_prop' => $model->kd_prop], [
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
            'kd_prop',
            'nm_prop',
        ],
    ]) ?>

</div>

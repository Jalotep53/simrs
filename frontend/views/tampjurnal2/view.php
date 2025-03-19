<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Tampjurnal2 $model */

$this->title = $model->kd_rek;
$this->params['breadcrumbs'][] = ['label' => 'Tampjurnal2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tampjurnal2-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kd_rek' => $model->kd_rek], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kd_rek' => $model->kd_rek], [
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
            'kd_rek',
            'nm_rek',
            'debet',
            'kredit',
        ],
    ]) ?>

</div>

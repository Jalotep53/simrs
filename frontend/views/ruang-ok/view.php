<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\RuangOk $model */

$this->title = $model->kd_ruang_ok;
$this->params['breadcrumbs'][] = ['label' => 'Ruang Oks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ruang-ok-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kd_ruang_ok' => $model->kd_ruang_ok], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kd_ruang_ok' => $model->kd_ruang_ok], [
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
            'kd_ruang_ok',
            'nm_ruang_ok',
        ],
    ]) ?>

</div>

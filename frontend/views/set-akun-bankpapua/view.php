<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SetAkunBankpapua $model */

$this->title = $model->kd_rek;
$this->params['breadcrumbs'][] = ['label' => 'Set Akun Bankpapuas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="set-akun-bankpapua-view">

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
            'usere',
            'passworde',
        ],
    ]) ?>

</div>

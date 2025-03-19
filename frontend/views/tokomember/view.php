<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Tokomember $model */

$this->title = $model->no_member;
$this->params['breadcrumbs'][] = ['label' => 'Tokomembers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tokomember-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_member' => $model->no_member], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_member' => $model->no_member], [
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
            'no_member',
            'nama',
            'jk',
            'tmp_lahir',
            'tgl_lahir',
            'alamat',
            'no_telp',
            'email:email',
        ],
    ]) ?>

</div>

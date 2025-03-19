<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsJenisLuka $model */

$this->title = 'Create K3rs Jenis Luka';
$this->params['breadcrumbs'][] = ['label' => 'K3rs Jenis Lukas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="k3rs-jenis-luka-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SkdpBpjs $model */

$this->title = 'Create Skdp Bpjs';
$this->params['breadcrumbs'][] = ['label' => 'Skdp Bpjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skdp-bpjs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

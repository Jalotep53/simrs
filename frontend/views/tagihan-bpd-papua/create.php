<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TagihanBpdPapua $model */

$this->title = 'Create Tagihan Bpd Papua';
$this->params['breadcrumbs'][] = ['label' => 'Tagihan Bpd Papuas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tagihan-bpd-papua-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

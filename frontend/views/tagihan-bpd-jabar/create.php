<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TagihanBpdJabar $model */

$this->title = 'Create Tagihan Bpd Jabar';
$this->params['breadcrumbs'][] = ['label' => 'Tagihan Bpd Jabars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tagihan-bpd-jabar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

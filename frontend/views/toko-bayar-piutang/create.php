<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TokoBayarPiutang $model */

$this->title = 'Create Toko Bayar Piutang';
$this->params['breadcrumbs'][] = ['label' => 'Toko Bayar Piutangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toko-bayar-piutang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BayarPiutang $model */

$this->title = 'Create Bayar Piutang';
$this->params['breadcrumbs'][] = ['label' => 'Bayar Piutangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bayar-piutang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

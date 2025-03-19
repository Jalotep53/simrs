<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetServiceRanapPiutang $model */

$this->title = 'Create Set Service Ranap Piutang';
$this->params['breadcrumbs'][] = ['label' => 'Set Service Ranap Piutangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-service-ranap-piutang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

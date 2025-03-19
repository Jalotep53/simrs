<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetTarifOnline $model */

$this->title = 'Create Set Tarif Online';
$this->params['breadcrumbs'][] = ['label' => 'Set Tarif Onlines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-tarif-online-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

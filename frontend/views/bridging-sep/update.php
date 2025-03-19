<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingSep $model */

$this->title = 'Update Bridging Sep: ' . $model->no_sep;
$this->params['breadcrumbs'][] = ['label' => 'Bridging Seps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_sep, 'url' => ['view', 'no_sep' => $model->no_sep]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bridging-sep-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

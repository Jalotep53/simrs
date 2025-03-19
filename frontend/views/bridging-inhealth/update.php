<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingInhealth $model */

$this->title = 'Update Bridging Inhealth: ' . $model->no_sjp;
$this->params['breadcrumbs'][] = ['label' => 'Bridging Inhealths', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_sjp, 'url' => ['view', 'no_sjp' => $model->no_sjp]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bridging-inhealth-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

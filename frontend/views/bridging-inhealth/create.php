<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingInhealth $model */

$this->title = 'Create Bridging Inhealth';
$this->params['breadcrumbs'][] = ['label' => 'Bridging Inhealths', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bridging-inhealth-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

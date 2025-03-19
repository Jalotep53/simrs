<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingSep $model */

$this->title = 'Create Bridging Sep';
$this->params['breadcrumbs'][] = ['label' => 'Bridging Seps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bridging-sep-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

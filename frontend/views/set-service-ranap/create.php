<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetServiceRanap $model */

$this->title = 'Create Set Service Ranap';
$this->params['breadcrumbs'][] = ['label' => 'Set Service Ranaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-service-ranap-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

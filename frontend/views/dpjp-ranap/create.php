<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DpjpRanap $model */

$this->title = 'Create Dpjp Ranap';
$this->params['breadcrumbs'][] = ['label' => 'Dpjp Ranaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dpjp-ranap-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetPjlab $model */

$this->title = 'Create Set Pjlab';
$this->params['breadcrumbs'][] = ['label' => 'Set Pjlabs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-pjlab-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

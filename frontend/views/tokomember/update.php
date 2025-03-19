<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tokomember $model */

$this->title = 'Update Tokomember: ' . $model->no_member;
$this->params['breadcrumbs'][] = ['label' => 'Tokomembers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_member, 'url' => ['view', 'no_member' => $model->no_member]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tokomember-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

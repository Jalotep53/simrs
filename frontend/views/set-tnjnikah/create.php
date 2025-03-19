<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetTnjnikah $model */

$this->title = 'Create Set Tnjnikah';
$this->params['breadcrumbs'][] = ['label' => 'Set Tnjnikahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-tnjnikah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

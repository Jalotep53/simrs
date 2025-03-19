<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Jumpasien $model */

$this->title = 'Create Jumpasien';
$this->params['breadcrumbs'][] = ['label' => 'Jumpasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jumpasien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Kasift $model */

$this->title = 'Create Kasift';
$this->params['breadcrumbs'][] = ['label' => 'Kasifts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kasift-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

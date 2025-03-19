<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Jamsostek $model */

$this->title = 'Create Jamsostek';
$this->params['breadcrumbs'][] = ['label' => 'Jamsosteks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jamsostek-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

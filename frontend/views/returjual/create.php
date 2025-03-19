<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Returjual $model */

$this->title = 'Create Returjual';
$this->params['breadcrumbs'][] = ['label' => 'Returjuals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="returjual-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

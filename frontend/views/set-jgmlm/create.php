<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetJgmlm $model */

$this->title = 'Create Set Jgmlm';
$this->params['breadcrumbs'][] = ['label' => 'Set Jgmlms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-jgmlm-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

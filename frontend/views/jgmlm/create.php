<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Jgmlm $model */

$this->title = 'Create Jgmlm';
$this->params['breadcrumbs'][] = ['label' => 'Jgmlms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jgmlm-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

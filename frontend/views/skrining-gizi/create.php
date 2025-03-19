<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SkriningGizi $model */

$this->title = 'Create Skrining Gizi';
$this->params['breadcrumbs'][] = ['label' => 'Skrining Gizis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skrining-gizi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

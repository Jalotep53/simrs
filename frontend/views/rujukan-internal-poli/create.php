<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RujukanInternalPoli $model */

$this->title = 'Create Rujukan Internal Poli';
$this->params['breadcrumbs'][] = ['label' => 'Rujukan Internal Polis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rujukan-internal-poli-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

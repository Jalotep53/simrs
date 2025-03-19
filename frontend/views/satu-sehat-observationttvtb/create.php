<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatObservationttvtb $model */

$this->title = 'Create Satu Sehat Observationttvtb';
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Observationttvtbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-observationttvtb-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

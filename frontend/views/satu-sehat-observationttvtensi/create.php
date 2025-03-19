<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatObservationttvtensi $model */

$this->title = 'Create Satu Sehat Observationttvtensi';
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Observationttvtensis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-observationttvtensi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

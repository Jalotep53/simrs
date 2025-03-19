<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\HasilEndoskopiTelinga $model */

$this->title = 'Create Hasil Endoskopi Telinga';
$this->params['breadcrumbs'][] = ['label' => 'Hasil Endoskopi Telingas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasil-endoskopi-telinga-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

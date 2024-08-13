<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\NotaJalan $model */

$this->title = 'Create Nota Jalan';
$this->params['breadcrumbs'][] = ['label' => 'Nota Jalans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nota-jalan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

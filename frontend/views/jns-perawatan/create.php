<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\JnsPerawatan $model */

$this->title = 'Create Jns Perawatan';
$this->params['breadcrumbs'][] = ['label' => 'Jns Perawatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jns-perawatan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

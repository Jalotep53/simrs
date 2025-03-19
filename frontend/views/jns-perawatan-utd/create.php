<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\JnsPerawatanUtd $model */

$this->title = 'Create Jns Perawatan Utd';
$this->params['breadcrumbs'][] = ['label' => 'Jns Perawatan Utds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jns-perawatan-utd-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

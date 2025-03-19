<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SkpPenilaian $model */

$this->title = 'Create Skp Penilaian';
$this->params['breadcrumbs'][] = ['label' => 'Skp Penilaians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skp-penilaian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

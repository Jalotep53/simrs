<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\GolonganPolri $model */

$this->title = 'Create Golongan Polri';
$this->params['breadcrumbs'][] = ['label' => 'Golongan Polris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="golongan-polri-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Antripenolakananjuranmedis $model */

$this->title = 'Create Antripenolakananjuranmedis';
$this->params['breadcrumbs'][] = ['label' => 'Antripenolakananjuranmedis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="antripenolakananjuranmedis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

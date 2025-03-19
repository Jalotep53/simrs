<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PemantauanPewsDewasa $model */

$this->title = 'Create Pemantauan Pews Dewasa';
$this->params['breadcrumbs'][] = ['label' => 'Pemantauan Pews Dewasas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemantauan-pews-dewasa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

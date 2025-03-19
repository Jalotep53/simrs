<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PemantauanMeowsObstetri $model */

$this->title = 'Create Pemantauan Meows Obstetri';
$this->params['breadcrumbs'][] = ['label' => 'Pemantauan Meows Obstetris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemantauan-meows-obstetri-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InacbgCoderNik $model */

$this->title = 'Create Inacbg Coder Nik';
$this->params['breadcrumbs'][] = ['label' => 'Inacbg Coder Niks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inacbg-coder-nik-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

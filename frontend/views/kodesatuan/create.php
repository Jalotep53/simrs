<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Kodesatuan $model */

$this->title = 'Create Kodesatuan';
$this->params['breadcrumbs'][] = ['label' => 'Kodesatuans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kodesatuan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

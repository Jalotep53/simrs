<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PencapaianKinerja $model */

$this->title = 'Create Pencapaian Kinerja';
$this->params['breadcrumbs'][] = ['label' => 'Pencapaian Kinerjas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pencapaian-kinerja-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\HasilEndoskopiFaringLaring $model */

$this->title = 'Create Hasil Endoskopi Faring Laring';
$this->params['breadcrumbs'][] = ['label' => 'Hasil Endoskopi Faring Larings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasil-endoskopi-faring-laring-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

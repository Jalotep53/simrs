<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BerkasDigitalPerawatan $model */

$this->title = 'Create Berkas Digital Perawatan';
$this->params['breadcrumbs'][] = ['label' => 'Berkas Digital Perawatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="berkas-digital-perawatan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

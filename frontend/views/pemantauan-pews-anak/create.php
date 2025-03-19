<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PemantauanPewsAnak $model */

$this->title = 'Create Pemantauan Pews Anak';
$this->params['breadcrumbs'][] = ['label' => 'Pemantauan Pews Anaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemantauan-pews-anak-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PengkajianRestrain $model */

$this->title = 'Create Pengkajian Restrain';
$this->params['breadcrumbs'][] = ['label' => 'Pengkajian Restrains', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengkajian-restrain-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

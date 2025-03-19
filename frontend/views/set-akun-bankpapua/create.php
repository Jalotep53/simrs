<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetAkunBankpapua $model */

$this->title = 'Create Set Akun Bankpapua';
$this->params['breadcrumbs'][] = ['label' => 'Set Akun Bankpapuas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-akun-bankpapua-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

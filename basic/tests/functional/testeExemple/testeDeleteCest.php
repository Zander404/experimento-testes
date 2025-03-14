<?php
class TesteDelete
{
    // Delete
    public function testeDelete(FunctionalTester $I)
    {
        $I->expectTo('Verificar se a deleção de informações de uma pessoa está correta.');
        $model = $I->grabRecord('app\models\Teste', array('nome' => 'Jorge'));
        $I->sendAjaxPostRequest(['/Teste/delete', 'id' => $model->id]);
        $I->dontSeeRecord('app\models\Teste', [
            'id' => $id,
            'nome' => $model->nome,
        ]);
    }
}

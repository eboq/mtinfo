<?php


class AlunoProfessorsController extends AppController
{
    public function delete($id, $idprofessor) {
    	if ($this->request->is('get'))
    	{
    		throw new MethodNotAllowedException();
    	}
    	
    	$result = $this->AlunoProfessor->find('list', array('fields' => array('AlunoProfessor.id'),
    			 'conditions' => array('AlunoProfessor.id_aluno' => $id, 'AlunoProfessor.id_professor' => $idprofessor)));

    	
    	if($this->AlunoProfessor->delete($result))
    	{
    		$this->Session->setFlash(__('Aluno removido.'), "flash_notification");
    		return $this->redirect(array('controller' => 'AlunoProfessors', 'action' => 'listAlunos', $idprofessor));
    	}
    	
    }
    
    
    
    

    public function listAlunos($id) 
    {

    	$result = $this->AlunoProfessor->query("select tb_usuario.id, tb_usuario.nome, tb_professor.id from tb_usuario 
    			inner join tb_aluno on tb_aluno.id = tb_usuario.id 
    			inner join tb_aluno_professor on tb_aluno.id = tb_aluno_professor.id_aluno 
    			inner join tb_professor on tb_professor.id = tb_aluno_professor.id_professor where tb_professor.id = '$id'");
    	
    	
    	$this->set('alunoprofessors', $result);
    	$this->set('id', $id);
    }
    
    
    public function add()
    {

    	if ($this->request->is('post'))
    	{
    		$this->AlunoProfessor->create();
    
    		if ($this->AlunoProfessor->saveAll($this->request->data))
    		{
    			$this->Session->setFlash(__('Aluno adicionado.'), "flash_notification");
    			return $this->redirect(array('controller' => 'AlunoProfessors', 'action' => 'listAlunos', $this->request->data['AlunoProfessor']['id_professor']));
    		}
    		$this->Session->setFlash(__('Erro ao criar Aluno.'));
    	}
    }
    
    
    
    public function selecionarAluno($id)
    {
    	
    	$result = $this->AlunoProfessor->query("select tb_usuario.nome, tb_usuario.id from tb_usuario 
    		inner join tb_aluno on tb_aluno.id = tb_usuario.id where tb_aluno.id not in 
				(select tb_aluno.id from tb_aluno 
    			inner join tb_aluno_professor on tb_aluno.id = tb_aluno_professor.id_aluno 
    			inner join tb_professor on tb_professor.id = tb_aluno_professor.id_professor where tb_professor.id = '$id')");


    	$this->set('alunos', $result);
    	$this->set('idprofessor', $id);
    	
    }
    
    
    public function addAluno($idaluno, $idprofessor)
    {
    	
    	$this->set('idaluno', $idaluno);
    	$this->set('idprofessor', $idprofessor);
    }
    
    
    
    
    
    
    
    
}

?>
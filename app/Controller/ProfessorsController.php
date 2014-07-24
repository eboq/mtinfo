<?php


class ProfessorsController extends AppController
{
	public function beforeFilter(){
		
	}
	public function retProf($id = null){
		return $this->Professor->findById($id);
	}

	public function index() {
		$this->set('professors', $this->Professor->find('all'));
	}

	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Professor invalido'));
		}

		$professor = $this->Professor->findById($id);
		if (!$professor) {
			throw new NotFoundException(__('Professor nao encontrado'));
		}
		$this->set('professor', $professor);
	}



	public function add()
	{
		if ($this->request->is('post'))
		{
			$this->Professor->create();

			if ($this->Professor->saveAll($this->request->data))
			{
				$this->Session->setFlash(__('Professor salvo com sucesso.'), "flash_notification");
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Erro ao criar Professor.'));
		}
	}

	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Professor invalido'));
		}

		$professor = $this->Professor->findById($id);
		if (!$professor) {
			throw new NotFoundException(__('Professor nao encontrado'));
		}

		if ($this->request->is(array('professor', 'put'))) {
			$this->Professor->id = $id;
			if ($this->Professor->saveAll($this->request->data)) {
				$this->Session->setFlash(__('Professor atualizado com sucesso.'), "flash_notification");
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Erro ao atualizar dados.'));
		}

		if (!$this->request->data) {
			$this->request->data = $professor;
		}
	}

	public function delete($id) {
		if ($this->request->is('get'))
		{
			throw new MethodNotAllowedException();
		}
		 
		 
		 
		$this->Professor->AlunoProfessor->query("delete from tb_aluno_professor where id_professor = '$id'");

		if ($this->Professor->delete($id))
		{
			if($this->Professor->User->delete($id))
			{
				$this->Session->setFlash(__('Professor excluido com sucesso.'), "flash_notification");
				return $this->redirect(array('action' => 'index'));
			}

		}
	}
}

?>
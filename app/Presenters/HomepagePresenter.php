<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;
use Nette\DI\Attributes\Inject;


final class HomepagePresenter extends Nette\Application\UI\Presenter
{

	#[Inject]
	public Nette\Database\Explorer $db;

	public function actionDefault()
	{
		$user = $this->db->table('user')->get(1);
	}
}

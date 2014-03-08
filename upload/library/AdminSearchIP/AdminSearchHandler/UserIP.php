<?php

class AdminSearchIP_AdminSearchHandler_UserIP extends XenForo_AdminSearchHandler_Abstract
{
	protected function _getTemplateName()
	{
		return 'quicksearch_usersIP';
	}

	public function getPhraseKey()
	{
		return 'Users IP';
	}

	public function search($searchText, array $phraseMatches = null)
	{		
		$userModel = $this->getModelFromCache('XenForo_Model_User');		
		return $userModel->getUsersByIp($searchText);
	}
}
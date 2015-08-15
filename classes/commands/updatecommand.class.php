<?php

namespace Commands;

use Entities\BaseContainer;

class UpdateCommand extends BaseCommand
{
	/**
	 * Getter for mask of validation
	 * @return array
	 */
	protected function getInfoCheckMask()
	{
		return [
			'pk' => ['string', 40],
		];
	}

	public function execute()
	{
		$oContainer = BaseContainer::getInstance('trip');
	}


}
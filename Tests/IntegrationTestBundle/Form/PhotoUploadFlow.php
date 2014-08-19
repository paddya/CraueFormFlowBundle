<?php

namespace Craue\FormFlowBundle\Tests\IntegrationTestBundle\Form;

use Craue\FormFlowBundle\Form\FormFlow;

/**
 * @author Christian Raue <christian.raue@gmail.com>
 * @copyright 2011-2014 Christian Raue
 * @license http://opensource.org/licenses/mit-license.php MIT License
 */
class PhotoUploadFlow extends FormFlow {

	/**
	 * {@inheritDoc}
	 */
	public function getName() {
		return 'photoUpload';
	}

	/**
	 * {@inheritDoc}
	 */
	protected function loadStepsConfig() {
		return array(
			array(
				'label' => 'select a photo',
				'type' => new PhotoUploadForm(),
			),
			array(
				'label' => 'describe the photo',
				'type' => new PhotoUploadForm(),
			),
			array(
				'label' => 'confirmation',
				'type' => new PhotoUploadForm(),
			),
		);
	}

}

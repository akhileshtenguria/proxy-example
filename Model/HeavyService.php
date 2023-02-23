<?php
namespace Keyexpress\ProxyDemo\Model;

class HeavyService extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	// const CACHE_TAG = 'mageplaza_helloworld_post';

	// protected $_cacheTag = 'mageplaza_helloworld_post';

	// protected $_eventPrefix = 'mageplaza_helloworld_post';

	protected function _construct()
	{
		echo "HeavyService Model _construct call ";
		// die; 
		// $this->_init('Mageplaza\HelloWorld\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		// return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getHeavyServiceMessage()
	{
		echo "getHeavyServiceMessage function call ";
		// $values = [];

		// return $values;
	}
}
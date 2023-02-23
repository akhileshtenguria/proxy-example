<?php
namespace Keyexpress\ProxyDemo\Controller\Page;


class Helloworld extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;
	protected $heavyservice;
	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
		\Keyexpress\ProxyDemo\Model\HeavyService $heavyservice,
		\Magento\Framework\App\RequestInterface $request
	)
	{
		$this->_pageFactory = $pageFactory;
		$this->heavyservice = $heavyservice;
		 $this->request = $request;
		return parent::__construct($context);
	}

	public function execute()
	{
		echo "<br>";
		echo "id-".$id = $this->request->getParam("id");
		echo "<br>";
		// die("uyutty"); 
		if($id==1){
		echo "<br>";
			echo "test";
		echo "<br>";
			// die; 
			$this->heavyservice->getHeavyServiceMessage();
		}else{
			echo "HeavyService Model not call from Helloworldcontroller file ";
			// die; 
		}
		// die; 
		// return $this->_pageFactory->create();
	}
}
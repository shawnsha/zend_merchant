<?php
namespace Point\Controller;
 
use Zend\Mvc\Controller\AbstractRestfulController; 
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;
use HiiirDb\Service\AdapterServiceFactory as HiiirDbService;
use Point\Model\Point as PointLog;
use Point\Model\Table\MemberPointcardRel;
use Point\Model\Table\Pointcard;

/**
* 點數平台對外RESTFUL API，提供使用者增、減點數使用。
* 使用RUSTFul的方式，這可以讓人生簡單一點。
* @author 沙士
* @version 0.1
**/
class PointController extends AbstractRestfulController
{
    public function __construct()
    {
    }
    
    /**
    * 取得使用者目前總點數(可考慮用Server Cache建立，若有更新再重新讀取)
    * @return int point 使用者目前現有的點數
    **/
    public function getList()
    {
        $tableObj = new PointLog(HiiirDbService::getAdapter());
        $pointLogAry = $tableObj->getPointNumber(1);
        $result = new JsonModel($pointLogAry);
        
        return $result;
    }
 
    public function get($id)
    {
        echo $id;
        die();
        # code...
    }
 
    public function create($data)
    {
        # code...
    }
 
    public function update($id, $data)
    {
        # code...
    }
 
    public function delete($id)
    {
        # code...
    }
    
    public function getPointLogTable(){
    }
}
?>
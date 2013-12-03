<?php
namespace Point\Model;

use HiiirStdLib\Utils\DataValidate;
use HiiirDb\Service\AdapterServiceFactory as HiiirDbService;
use Point\Exception\ModelException;
use Point\Model\Table\MemberPointcardRel as MPRTable;
use Point\Model\Table\Pointcard as PointcardTable;
use Point\Model\Table\PointLog as PointLogTable;

use HiiirStdLib\Utils\Date;

class Point
{
    /**
    * 透過會員編號取得目前可使用的點數
    * @param  int memberId 會員編號
    * @return int number   可用點數
    **/
    public function getPointNumber($memberId)
    {
        //取出此使用者卡號
        $mprObj = new MPRTable(HiiirDbService::getAdapter());
        $cardnNmAry = $mprObj->existsPointcardByMemberId($memberId);
        unset($mprObj , $memberId);
        
        //若此使用者有多個卡號，全部找出來
        foreach($cardnNmAry as $cardNum){
            $findCardAry[] = $cardNum["pointcard_id"];
        }
        
        //取出所有卡號加總後的數字
        $pointCardObj = new PointcardTable(HiiirDbService::getAdapter());
        $pointNumber = $pointCardObj->existsNumberByCardId($findCardAry);
        return $pointNumber;
    }
}
?>
<?php
namespace Point\Model\Table;

use HiiirDb\Adapter as HiiirDbAdapter;

class Pointcard
{
    protected $dbAdapter = null;
    
    public function __construct(HiiirDbAdapter $dbAdapter)
    {
        $this->dbAdapter = $dbAdapter;
    }
    
    /**
    * 透過會員卡編號取出點數
    * @param  int memberId    會員編號
    * @return int pointcardId 會員卡編號
    */
    public function existsNumberByCardId($cardIdAry)
    {
        //取出
        $inQuery = implode(",", array_fill(0, count($cardIdAry), '?'));
        $sqlStr = "SELECT SUM(`number`) as 'Number' FROM `pointcard` where `id` IN(".$inQuery.")";
        $bindAry = $cardIdAry;
        return $this->dbAdapter->sqlQuery($sqlStr, HiiirDbAdapter::QUERY_TYPE_SELECTONE, $bindAry);
    }
    
    
}
?>
<?php
namespace Point\Model\Table;

use HiiirDb\Adapter as HiiirDbAdapter;

class MemberPointcardRel
{
    protected $dbAdapter = null;
    
    public function __construct(HiiirDbAdapter $dbAdapter)
    {
        $this->dbAdapter = $dbAdapter;
    }
    
    /**
    * 透過會員編號取出會員卡號
    * @param  int memberId    會員編號
    * @return int pointcardId 會員卡編號
    */
    public function existsPointcardByMemberId($memberId)
    {
        //取出
        $sqlStr = "SELECT * FROM `member_pointcard_rel` where `member_id` = ?";
        $bindAry[] = $memberId;
        return $this->dbAdapter->sqlQuery($sqlStr, HiiirDbAdapter::QUERY_TYPE_SELECT, $bindAry);
    }
    
    
}
?>
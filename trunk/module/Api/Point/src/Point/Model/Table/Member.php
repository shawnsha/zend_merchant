<?php
namespace Point\Model\Table;

use HiiirDb\Adapter as HiiirDbAdapter;

class PointLog
{
    protected $dbAdapter = null;
    
    public $member_id;
    public $pointcard_id;
    public $number;
    public $createtime;

    public function __construct(HiiirDbAdapter $dbAdapter)
    {
        $this->dbAdapter = $dbAdapter;
    }
    
    public function existsByMemberId($memberId)
    {
        $sqlStr = "SELECT * FROM `point_log` where `member_id` = ?";
        $bindAry[] = $memberId;
        return $this->dbAdapter->sqlQuery($sqlStr, HiiirDbAdapter::QUERY_TYPE_SELECT, $bindAry);
    }    
}
?>
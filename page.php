<?php
class page
{
    function getPageList()
    {

        $pageList = '';
        $allNum = allNews();
        $pageSize = 5; //约定每页显示几条信息
        $pageNum = empty($_GET["pageNum"]) ? 1 : $_GET["pageNum"];
        $endPage = ceil($allNum / $pageSize); //总页数

        for ($i = 1; $i <= $endPage; $i++) {
            if ($i == $pageNum) {
                $currentPage = " " . "$i" . " ";
            } else {
                $currentPage = " " . "<a href=' ?pageNum= $i'>$i</a>" . " ";
            }
            $pageList .= $currentPage;
        }
        return $pageList;
    }
}
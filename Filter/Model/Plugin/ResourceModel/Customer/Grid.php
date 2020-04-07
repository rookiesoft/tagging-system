<?php
namespace RookieSoft\Filter\Model\Plugin\ResourceModel\Customer;

class Grid
{
    public static $table = 'customer_grid_flat';
    //public static $leftJoinTable = 'codextblog_customercolumn_pannumber';
    // echo '<pre>';
    // var_dump("TTTTTTTTTTTTTTTTTTTTTTTTTTTTTT");
    // exit();
    //error_log(print_r("ccccccccccc",true));






    public function afterSearch($intercepter, $collection)
    {
        if ($collection->getMainTable() === $collection->getConnection()->getTableName('customer_grid_flat')) {
            //$leftJoinTableName = $collection->getConnection()->getTableName(self::$leftJoinTable);

            // $collection
            //     ->getSelect()
            //     ->joinLeft([
            //         'entity_tag' => 'rookiesoft_customertags_entity_tag'],
            //         'main_table.entity_id = entity_tag.entity_id',
            //         ['tag_code' => 'entity_tag.tag_code']
            //     )->joinLeft([
            //         'tag' => 'rookiesoft_customertags_tag'],
            //         'entity_tag.tag_code = tag.code',
            //         ['rami' => 'tag.label']
            //     );
                // $this->_map['fields']['tags'] = 'tag.label';
                // echo '<pre>';
                // var_dump($this->_map);
                // exit();
            //     $this->collection
            // ->addFieldToFilter(
            //     'entity_tag.tag_code',
            //     ['eq' => 'sss']
            // );
                //$collection->addFilterToMap('rami', 'tag.label');
                //$collection->addAddressFields();
                // $select = $collection->addFieldToFilter('entity_id', '2');
                // foreach($select as $x){
                //    echo '<pre>';
                //     var_dump($x->getCode());
                //     exit();
                // }


            // $where = $collection->getSelect()->getPart(\Magento\Framework\DB\Select::WHERE);
            // $collection->getSelect()->setPart(\Magento\Framework\DB\Select::WHERE, $where)->group('main_table.entity_id');
        }
        return $collection;
    }
    // protected function _initSelect()
    // {
    //     error_log(print_r("wwwwwwwwwwwwwwwwww",true));
    //     $this->addFilterToMap('email', 'main_table.email');

    //     parent::_initSelect();
    // }
}
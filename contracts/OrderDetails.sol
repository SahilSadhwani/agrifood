pragma solidity 0.5.8;

contract  OrderDetails{

    struct orderDetail{
        uint order_id;
        uint order_left_from_farmer;
        uint processed_by_thirdparty;
        uint processed_by_store;
        uint order_cancel;
        string hashdata;
    }
    
    mapping(uint=>orderDetail) public order;
    uint public orderCount;
   
    
    function addOrder(uint order_id, uint order_left_from_farmer, uint processed_by_thirdparty, uint processed_by_store, uint order_cancel, string memory hashdata) public{
        orderCount++;
        order[order_id] = orderDetail(order_id, order_left_from_farmer, processed_by_thirdparty, processed_by_store, order_cancel, hashdata);
    }
    
    
    function updateFarmerStatus(uint order_id, uint order_left_from_farmer) public{
        orderDetail storage ord = order[order_id];
        ord.order_left_from_farmer = 1;
    }
    
    
    function updateThirdpartyStatus(uint order_id, uint processed_by_thirdparty) public{
        orderDetail storage ord = order[order_id];
        ord.processed_by_thirdparty = 1;
    }
    
    function updateStoreStatus(uint order_id, uint processed_by_store) public{
        orderDetail storage ord = order[order_id];
        ord.processed_by_store = 1;
    }
    
    
    
    function cancelOrder(uint order_id, uint order_cancel) public{
        orderDetail storage ord = order[order_id];
        ord.order_cancel = 1;
    }
    
    
    
    

}
pragma solidity 0.5.8;

contract  RegisterUser{

    struct userDetails{
        uint user_id;
        string user_name;
        string user_email;
        string user_password;
        uint user_type_id;
        uint count;
    }
    
    mapping(uint=>userDetails) public user;
    uint public userCount;
    
    function addUser(uint user_id, string memory user_name, string memory user_email, string memory user_password, uint user_type_id) public{
        userCount++;
        user[userCount] = userDetails(user_id, user_name, user_email, user_password, user_type_id, userCount);
    }

}
var RegisterUser = artifacts.require("./RegisterUser.sol");
var OrderDetails = artifacts.require("./OrderDetails.sol");

module.exports = function(deployer) {
  deployer.deploy(RegisterUser);
 deployer.deploy(OrderDetails);    
    
};
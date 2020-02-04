App = {
  web3Provider: null,
  contracts: {},

  init: async function() {
    // Load pets.
//      alert("init");
//    $.getJSON('../pets.json', function(data) {
//      var petsRow = $('#petsRow');
//      var petTemplate = $('#petTemplate');
//
//      for (i = 0; i < data.length; i ++) {
//        petTemplate.find('.panel-title').text(data[i].name);
//        petTemplate.find('img').attr('src', data[i].picture);
//        petTemplate.find('.pet-breed').text(data[i].breed);
//        petTemplate.find('.pet-age').text(data[i].age);
//        petTemplate.find('.pet-location').text(data[i].location);
//        petTemplate.find('.btn-adopt').attr('data-id', data[i].id);
//
//        petsRow.append(petTemplate.html());
//      }
//    });

    return await App.initWeb3();
  },

  initWeb3: async function() {
    if (typeof web3 !== 'undefined') {
      // If a web3 instance is already provided by Meta Mask.
      App.web3Provider = web3.currentProvider;
//        alert("hi");
      web3 = new Web3(web3.currentProvider);
    } else {
        
      // Specify default instance if no web3 instance provided
      App.web3Provider = new Web3.providers.HttpProvider('HTTP://127.0.0.1:7545');
      web3 = new Web3(App.web3Provider);
//        alert("here");
    }

    return App.initContract();
  },
    
    
    redirect: function(){ 
//        alert("hi");
    window.location.href = "http://localhost/agrifood/src/login.php";      
  },
    
    redirectRegisterPage: function(){ 
//        alert("hi");
    window.location.href = "http://localhost/agrifood/src/register.php";      
  },
    

  initContract: function() {
    $.getJSON("RegisterUser.json", function(registeruser) {
        
      // Instantiate a new truffle contract from the artifact
      App.contracts.RegisterUser = TruffleContract(registeruser);
      // Connect provider to interact with contract
      App.contracts.RegisterUser.setProvider(App.web3Provider);
        
       
//
      return App.render();
    });

    
  },

 

  markAdopted: function(adopters, account) {
    /*
     * Replace me...
     */
  },

  handleAdopt: function(event) {
    event.preventDefault();

    var petId = parseInt($(event.target).data('id'));

    /*
     * Replace me...
     */
  },
    
    
    render: function(){
    
    try{
//        alert("try");
         web3.eth.getCoinbase(function(err, account) {
      if (err === null) {
        //var account = web3.eth.accounts[1];
        App.account = account;
          alert(account);
        //web3.eth.getAccounts(accounts => console.log(accounts[0])).
        $("#accountAddress").html("Your Account: " + account);
      }
    }).catch(function(error) {
      console.warn(error);
    });
    }finally{
        return App.addUserDetails();   
    }
},
    
    addUserDetails: function(){
//        alert("Deploying....");
        var url=$(location).attr("href");
         url = url.toString();
        var urlarray=url.split("?");
        var splitmeagain=urlarray[1];
        
        var idExtract = splitmeagain.split("=");
        var id = idExtract[1];
        
//        var semifinalsplit=splitmeagain.split("&");
//        var emailSplit=semifinalsplit[0].split("=");
//        var email = emailSplit[1];
//        var passwordSplit = semifinalsplit[1].split("=");
//        var password = passwordSplit[1];
        
//        alert(email);
//        alert(password);
//        
        alert(id);
        
        
        var userId = "";
        var userName = "";
        var userEmail = "";
        var userPassword = "";
        var userTypeId = "";
        
         $.ajax({ 
               type: "POST", 
               url: "http://localhost/agrifood/src/fetch-user.php", 
                crossDomain: true,
               data: { id : id}, 
               success: function(ans) {
//                   document.write(ans);
//                   console.log(ans);
//                   dataArray = dataArray.text();
                        dataArray = JSON.parse(ans);
                   
//                   console.log(ans);
//                   alert(ans);
//                   alert("hihi");
//                        alert(dataArray);
//                   console.log(dataArray);
                        userId = (dataArray['user_id']).toString();
                        userName = (dataArray['user_name']).toString();
                        userEmail = (dataArray['user_email']).toString();
                        userPassword = (dataArray['user_password']).toString();
                        userTypeId = (dataArray['user_type_id']).toString();
                      console.log(userId);
                   console.log(userName);
        console.log(userEmail);
        console.log(userPassword);  
                   console.log(userTypeId);
                     }      
             
                });
        
//        console.log(userId);
//        console.log(userEmail);
//        console.log(userPassword);
        
        
        App.contracts.RegisterUser.deployed().then(function(instance){
            return instance.addUser(userId, userName, userEmail, userPassword, userTypeId, {from: App.account, gas:300000}); }).then(function(result){
//                alert("sshshshshs");
            }).catch(function(err){
               console.log("Errr"+err); 
//             alert("in catch");
                
            });
        
//         window.location.href = "http://localhost:3000/index.html"; 
    },  
    


};

$(function() {
  $(window).load(function() {
    App.init();
  });
});

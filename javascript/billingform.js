<script type="text/javascript">
(function(window){

 /* The contents of your JS file */

  
var validator = { };

  validator.isEmailAddress = function(input){

  var atSymbol;
  var firstString;
  var secondString;
    if(input.indexOf("@") == -1){
      return false;
    }else{
      
     atSymbol = input.indexOf("@");
     firstString = input.slice(0,atSymbol);
     secondString = input.slice(atSymbol+1);
      
      if(firstString !== "" || secondString !== ""){
        return false;
      }else{
        return true;
      }
       
    }
   
};

validator.isPhoneNumber = function(input){
 
  
  
   for(var i=0;i<input.length;i++){
    
     if(i === 3 || i === 7){

          if(input[i] !== "-"){
           
              return false;
         }
       
    }else if(typeof Number(input[i]) !== 'number'){
      
              return false;

      }

  }
      return true;    

};
  
  validator.withoutSymbols = function(input){
      var characters = 

['1','2','3','4','5','6','7','8','9','0','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x',

'y','z',' '];
var newStr = "";
   for(var i=0;i<input.length;i++){
    
      if(characters.indexOf(input.toLowerCase()[i]) !== -1){
            newStr += input[i];
          
      }

   }
  return newStr;

};
  
  validator.isDate = function(input){
  if(Date.parse(input)){
	return true;
	
}
else {
  return false;

}

};
  
    validator.isBeforeDate = function(input, reference){
      var d1;
      var d2;
           
   
  if(this.isDate(input) &&  this.isDate(reference)){
       d1 = new Date(input);
      d2 = new Date(reference);
     
       if(d1.getFullYear() <= d2.getFullYear()){
           if(d1.getMonth() <= d2.getMonth()){
                if(d1.getDate() < d2.getDate()){
                     return true;
                }else{
                   return false;
                }
          }else{
              return false;
           }
     
      }else{
         return false;
  }
}else{
  throw "Please enter valid date.";
}


};
  
  validator.isAfterDate = function(input, reference){
       var d1;
      var d2;
           
   
  if(this.isDate(input) &&  this.isDate(reference)){
    
     d1 = new Date(input);
      d2 = new Date(reference);
     
       if(d1.getFullYear() >= d2.getFullYear()){
           if(d1.getMonth() >= d2.getMonth()){
                if(d1.getDate() > d2.getDate()){
                     return true;
                }else{
                   return false;
                }
          }else{
              return false;
           }
     
      }else{
         return false;
      }
}else {
  throw "Please enter valid date.";
}
    
    
  };
  
validator.isBeforeToday = function(input){
           var d1;
      var d2;

     d1 = new Date(input);
      d2 = new Date();
   
   if(d1.getFullYear() <= d2.getFullYear()){
           if(d1.getMonth() <= d2.getMonth()){
                if(d1.getDate() < d2.getDate()){
                     return true;
                }else{
                   return false;
                }
          }else{
              return false;
           }
     
      }else{
         return false;
      }
};


validator.isAfterToday = function(input){
         var d1;
      var d2;
           
   
  if(this.isDate(input)){

     d1 = new Date(input);
     d2 = new Date();
     
       if(d1.getFullYear() >= d2.getFullYear()){

           if(d1.getMonth() >= d2.getMonth()){
                if(d1.getDate() > d2.getDate()){
                     return true;
                }else{
                   return false;
                }
          }else{
              return false;
           }
     
      }else{
         return false;
      }
}else {
  throw "Please enter valid date.";
}
  
};
  
  
  validator.isEmpty = function(input){
  
 if(input === null || input.trim().length !== 0){
     return false;     
     
   }else {

     return true;
   }

};
  
  validator.contains = function(input, words){
  
   
    var inputSplit = input.replace(/[.,\/#!$%\'^&\*;:{}=\-_`~()"]/g," ").toLowerCase().split(" ");
 
    
   for(var i=0;i<inputSplit.length;i++){
        for(var j=0;j<words.length;j++){
        if(words[j].indexOf(inputSplit[i]) !== -1){
              return true;
              }
        }
    }
    return false;

};
  
  validator.lacks = function(input, words){
  
    return this.contains(input,words);
    /*
     var inputSplit = input.replace(/[.,\/#!$%\'^&\*;:{}=\-_`~()"]/g," ").toLowerCase().split(" ");
 
   for(var i=0;i<inputSplit.length;i++){
        for(var j=0;j<words.length;j++){
        if(words[j].indexOf(inputSplit[i]) !== -1){
              return false;
              }
        }
    }
    return true;*/


};
  
  validator.isComposedOf = function(input, strings){
      
    var inputSplit = input.split("");
 
   for(var i=0;i<inputSplit.length;i++){
        
       for(var j=0;j<strings.length;j++){
        
        if(strings[j] == inputSplit[i]){
              return true;
              
        }
       }
    }
    return false;

};
  
  validator.isLength = function(input, n){

  return input.length <= n;


};
  
  
  validator.isOfLength = function(input, n){

  return input.length >= n;

};
  
  validator.countWords = function(input){
  
    var count = 0;
   
    var inputArr = input.replace(/[.,\/#!$%\'^&\*;:{}=\-_`~()"]/g," ").split(" ");
   
    for(var i=0;i<inputArr.length;i++){
      
      if(inputArr[i] !== ""){
          count++;
        
      }
    }
   
    return count;
    
  

};
  
  
  validator.lessWordsThan = function(input, n){

return this.countWords(input) <= n;


};
  
  validator.moreWordsThan = function(input, n){
    

return this.countWords(input) >= n;


};


validator.isBetween = function(input, floor, ceil){
     
var result = this.countWords(input);

return result >= floor && result <= ceil;


};
  
  validator.isAlphanumeric = function(input){

   

 var characters = 

['1','2','3','4','5','6','7','8','9','0','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x',

'y','z'];
  
  var lowerCaseInput = input.toLowerCase();
  
     for(var i=0;i<lowerCaseInput.length;i++){
    
        if(characters.indexOf(lowerCaseInput[i]) === -1){
          
          return false;
        }
     }
    return true;



};


validator.isCreditCard = function(input){
    

  var characters = 

['1','2','3','4','5','6','7','8','9','0','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x',

'y','z'];
  
  var lowerCaseInput = input.toLowerCase().split("-").join("");
   // return lowerCaseInput;
  if(lowerCaseInput.length !== 16 || lowerCaseInput === ""){
    return false;
  }else{
     for(var i=0;i<lowerCaseInput.length;i++){
    
        if(characters.indexOf(lowerCaseInput[i]) === -1){
          
          return false;
        }
     }
    return true;
  }


};


validator.isHex = function(input){
     

  var characters = ['1','2','3','4','5','6','7','8','9','0','a','b','c','d','e','f'];
  
  var lowerCaseInput = input.toLowerCase();
  
  if(input.length > 7 || input[0] !== "#"){
       
   return false;  

   }else{ 
      for(var i =1;i<input.length;i++){
        if(characters.indexOf(lowerCaseInput[i]) === -1){
          return false;
        }
     }
     return true;
  }



};

  validator.isCreditCard = function(input){
    

  var characters = 

['1','2','3','4','5','6','7','8','9','0','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x',

'y','z'];
  
  var lowerCaseInput = input.toLowerCase().split("-").join("");
   // return lowerCaseInput;
  if(lowerCaseInput.length !== 16 || lowerCaseInput === ""){
    return false;
  }else{
     for(var i=0;i<lowerCaseInput.length;i++){
    
        if(characters.indexOf(lowerCaseInput[i]) === -1){
          
          return false;
        }
     }
    return true;
  }


};
  
  validator.isHex = function(input){
     

  var characters = ['1','2','3','4','5','6','7','8','9','0','a','b','c','d','e','f'];
  
  var lowerCaseInput = input.toLowerCase();
  
  if(input.length > 7 || input[0] !== "#"){
       
   return false;  

   }else{ 
      for(var i =1;i<input.length;i++){
        if(characters.indexOf(lowerCaseInput[i]) === -1){
          return false;
        }
     }
     return true;
  }



};
  
  validator.isRGB = function(input){
    
 var str = input.substr(0,3);
 var numStr = input.slice(4).replace(")",""); 
 var values =  numStr.split(",");
 var colorVal1 = +values[0]; 
 var colorVal2 = +values[1]; 
  var colorVal3 = +values[2];
 
   if(str === 'rgb'){
        if(colorVal1 >= 0 && colorVal1 <= 255){
           if(colorVal2 >= 0 && colorVal2 <= 255){
               if(colorVal3 >= 0 && colorVal3 <= 255){
                    return true;
               
               }else {
                return false;
               }
             
           }else{
             return false;
           }
       }else{
       
          return false;
       }
  }else{
         return false;
    }



};



validator.isHSL =  function(input){

   
 var str = input.substr(0,3);
 var numStr = input.slice(4).replace(")",""); 
 var values =  numStr.split(",");
 var colorVal1 = +values[0]; 
 var colorVal2 = +values[1]; 
  var colorVal3 = +values[2];
 
   if(str === 'hsl'){
        if(colorVal1 >= 0 && colorVal1 <= 360){
           if(colorVal2 >= 0 && colorVal2 <= 1){
               if(colorVal3 >= 0 && colorVal3 <= 1){
                    return true;
               
               }else {
                return false;
               }
             
           }else{
             return false;
           }
       }else{
       
          return false;
       }
  }else{
         return false;
    }

};
  
  validator.isColor = function(input){

 
    var str = input.substr(0,3);   

   if(input[0] === "#"){
        return this.isHex(input);   

   }else if(str === "rgb"){
       return this.isRGB(input);

   }else if(str === "hsl"){
       return this.isHSL(input);
  
   }else{
    
      return false;
   
   }


};
  
  validator.isTrimmed = function(input){
   var arr = input.split("Visiting new places is fun.");
  var result = "";
 
  for(var i=0;i<arr.length;i++){
      if(arr[i] !== ""){
        
       result += arr[i];
      
       if(i < arr.length-1){
          result += " ";
        }
      }
  }
  
  return result === input;

};
  



window.validator = validator;

})(window);




window.onload = function() {

  
  
  
var signupForm = document.getElementById('signup');
var signInForm = document.getElementById('sign-in');
var shipBillForm = document.getElementById('ship-bill');  
var searchForm = document.getElementById('search-form'); 
var scheduleForm = document.getElementById('schedule');
var questionnaireForm = document.getElementById('questionnaire');
var creditCardForm = document.getElementById('credit-card');


//  Shipping Billing Form Validation

shipBillForm.addEventListener('submit', function (event) {


    // stop the event from its default action: submitting the form (for our validation, submission is not desired)

    event.preventDefault();

var passCount = 0;




var billFirstName = document.getElementById("firstname1");
  
var billLastName = document.getElementById("lastname1");

var billAddress = document.getElementById("address1");
  
var billCity = document.getElementById("city1");
  
var billCountry = document.getElementById("country1");


var shipFirstName = document.getElementById("firstname2");
  
var shipLastName = document.getElementById("lastname2");

var shipAddress = document.getElementById("address2");
  
var shipCity = document.getElementById("city2");
  
var shipCountry = document.getElementById("country2");


// Shipping Information

if(!validator.isEmpty(shipFirstName.value) && shipFirstName.value.length >= 2){
       passCount++;

}else{
    window.alert("Please enter valid ship to first name.");
}

if(!validator.isEmpty(shipLastName.value) && shipLastName.value.length >= 2){
          passCount++;

}else{
    window.alert("Please enter valid ship to last name.");
}


if(!validator.isEmpty(shipAddress.value) && shipAddress.value.length >= 2){
         passCount++;

}else{
    window.alert("Please enter valid ship to address.");
}

if(!validator.isEmpty(shipCity.value) && shipCity.value.length >= 2){
         passCount++;

}else{
    window.alert("Please enter valid ship to city.");
}

if(!validator.isEmpty(shipCountry.value) && shipCountry.value.length >= 2){
        passCount++;

}else{
    window.alert("Please enter valid ship to country.");
}



// Billing Information


if(!validator.isEmpty(billFirstName.value) && billFirstName.value.length >= 2){
        passCount++;

}else{
    window.alert("Please enter valid bill to first name.");
}


if(!validator.isEmpty(billLastName.value) && billLastName.value.length >= 2){
          passCount++;

}else{
    window.alert("Please enter valid bill to last name.");
}


if(!validator.isEmpty(billAddress.value) && billAddress.value.length >= 2){
          passCount++;

}else{
    window.alert("Please enter valid bill to address.");
}

if(!validator.isEmpty(billCity.value) && billCity.value.length >= 2){
         passCount++;

}else{
    window.alert("Please enter valid bill to city.");
}

if(!validator.isEmpty(billCountry.value) && billCountry.value.length >= 2){
        passCount++;

}else{
    window.alert("Please enter valid bill to country.");
}

window.alert(passCount);
  
 if(passCount === 10) {
           window.alert("valid");
          signupForm.className = "valid"; 
        }
        else {
         
          signupForm.className = "invalid";
          window.alert("invalid");
        }
        



});


};

</script>
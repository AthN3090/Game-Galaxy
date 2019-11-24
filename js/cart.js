   
   
    
   function total_calculate(){
        var total = 0;
        var cost;
        var prices = document.getElementsByClassName('cost');
        for(var i=0;i<prices.length;i++){
            cost = prices[i].innerHTML.replace("Rs","");
            total=total+parseInt(cost);
    
            
        }
        cost = document.getElementsByClassName('total2');
        cost[0].innerHTML = "Rs "+total;
        
    }
    function quantity_check(id){
    var quantity = document.getElementById(id);
    var price = document.getElementById("01"+id);
    quantity.addEventListener('input', function( event) {
    var value = event.target.value;
    if ( !isNaN( value) && value!="") {
        var temp = id.toString();
            temp = temp.split("_");
        var cost = temp[0]*value;
        price.innerHTML = "Rs "+cost;
        total_calculate();
        
      
    }
  })
}


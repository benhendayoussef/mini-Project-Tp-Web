
function convert(){
    var TunisianPrices=[99,90.5,84,113]
    let devise=document.getElementById("devise").value
    var prices=document.getElementsByClassName("price")
    for (let i = 0; i < prices.length; i++) {
        if(devise=="$"){
            prices[i].innerText="Dollar "+Math.floor(TunisianPrices[i]/3*100)/100+" $"
        }
        else if(devise=="€"){
            prices[i].innerText="Euro "+Math.floor(TunisianPrices[i]/3.2*100)/100+" €"
        }
        
        else if(devise=="£"){
            prices[i].innerText="GBP "+Math.floor(TunisianPrices[i]/4*100)/100+" £"
        }
        else{
            prices[i].innerText="TND "+TunisianPrices[i]+" د.ت"
        }
    }

}
var historySection=document.getElementById("history");
  if(historySection){
    var historyItems=historySection.querySelectorAll(".post");
    for (var i = 0; i < historyItems.length; i++) {
      if(i>4){
        historyItems[i].classList.add("none-visible");
      }
    
  }
}


var categorySection=document.getElementById("categorys");
  if(categorySection){
    var categoryItems=categorySection.querySelectorAll(".post");
    for (var i = 0; i < categoryItems.length; i++) {
      if(i>8){
        
        categoryItems[i].classList.add("none-visible");
      }
      
    }
  }

function  seeAll(){
  var historySection=document.getElementById("history");
  var historyItems=historySection.querySelectorAll(".post");
  var historyItemsNone=historySection.querySelectorAll(".post.none-visible");
    if(historyItemsNone.length>0){
    for (var i = 0; i < historyItems.length; i++) {

      if(historyItems[i].classList.contains('none-visible')){
        historyItems[i].classList.remove("none-visible");
      }
      
    }
  }else{
    for (var i = 0; i < historyItems.length; i++) {
      if(i>4){
        historyItems[i].classList.add("none-visible");
      }
  }
}
}

function  seeAllCategorys(){
  var categorysSection=document.getElementById("categorys");
  var categorysItems=categorysSection.querySelectorAll(".post");
  var categorysItemsNone=categorysSection.querySelectorAll(".post.none-visible");
    if(categorysItemsNone.length>0){
    for (var i = 0; i < categorysItems.length; i++) {

      if(categorysItems[i].classList.contains('none-visible')){
        categorysItems[i].classList.remove("none-visible");
      }
      
    }
  }else{
    for (var i = 0; i < categorysItems.length; i++) {
      if(i>8){
        categorysItems[i].classList.add("none-visible");
      }
  }
}
}
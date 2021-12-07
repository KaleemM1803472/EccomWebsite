function openNav() {
  document.getElementById("mySidebar").style.width = "230px";
  document.getElementById("main").style.marginLeft = "230px";
  }
          
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
 }
          
          
  document.getElementById("searchbar").onkeyup = function(){
  input = document.getElementById("searchbar");
  filter = input.value.toUpperCase();
  li = document.getElementsByTagName("li");
  container = document.getElementById("container");
  containerAmount = li.length;
  for (i = 0; i < containerAmount; i++) {
    a = li[i].getElementsByTagName("p")[2];
    txtValue = a.textContent || a.innerText;
    if(txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display= "";
    } else {
      li[i].style.display= "none";
      }
      }
    }


  // function create(){
  //     document.getElementById("createForm").style.display = "";
  //     document.getElementById("LoginContainer").style.display = "none";
  //     document.getElementById("LoginOrCreate").style.display = "none";
  //   }

  // function Login(){
  //     document.getElementById("createForm").style.display = "none";
  //     document.getElementById("LoginContainer").style.display = "";
  //     document.getElementById("LoginOrCreate").style.display = "none";
  //   }



var OnOff = 1;
document.getElementById("dark").addEventListener('click', () => {
navbar = document.querySelector(".navbar");
sidebar = document.querySelector(".sidebar");
aText = document.querySelectorAll("a");
buttons = document.querySelectorAll(".openbtn");
containers = document.querySelectorAll("#container"); 
searchbar = document.getElementById("searchbar");
basketcontainers = document.querySelectorAll("#basketContainer");
basketTextContainer = document.querySelectorAll("#basketTextContainer");
var img1 = "coollogo_com-5183982.png";
var img2 = "evga-logo-black-and-white.png";   
var imgElement = document.getElementById('logo');
underline = document.querySelectorAll("#basketNumber");
 


if(OnOff == 1){
  document.getElementById("dark").textContent = "🌑";
  document.getElementById("cart").style.color = "white";
  document.getElementById("basketAmount").style.color="white";
  if(document.getElementById("AmountBasketMsg") != null){
    document.getElementById("AmountBasketMsg").style.color="white";
  }
  imgElement.src =  img2;
  document.body.style.background = "rgb(34, 33, 33)";
  navbar.style.background = "#2c2c2c";
  sidebar.style.background = "rgb(22, 21, 21)"; 
  aText.forEach(j => {
    j.style.color = "white";
  });  
  containers.forEach(e => {
    e.style.background = "#3f3f3f";
  });
  text = document.querySelectorAll("#text-container");  
  text.forEach(f => {
    f.style.color = "white";
  });
  basketcontainers.forEach(m => {
    m.style.background = "#3f3f3f";
  });
  basketTextContainer.forEach(n => {
    n.style.color = "white";
  });
  OnOff = 0;

  buttons.forEach(l => {
    l.style.color = "white";
    l.style.border = "1px solid white";
  });
  underline.forEach(v => {
    v.style.borderBottom = "1px solid white";
  });  

searchbar.style.borderBottom = "solid 1px #f1f1f1";
searchbar.style.color = "white";
document.getElementById("searchButton").style.color = "white";

}



else if(OnOff == 0){
  document.getElementById("dark").textContent = "🌕";
  document.getElementById("cart").style.color = "black";
  document.getElementById("basketAmount").style.color = "black";
  if(document.getElementById("AmountBasketMsg") != null){
    document.getElementById("AmountBasketMsg").style.color="black";
  }
  document.getElementById("basketNumber").borderBottom = "1px solid black";
  imgElement.src = img1;
  document.body.style.background = "#fff";
  navbar.style.background = "#f1f1f1";
  sidebar.style.background = "rgb(255, 255, 255)";
  aText.forEach(j => {
    j.style.color = "black";
  });  
  containers.forEach(e => {
    e.style.background = "#f1f1f1";
  });
  
  text = document.querySelectorAll("#text-container");  
  text.forEach(f => {
    f.style.color = "black";
  });
  basketcontainers.forEach(m => {
    m.style.background = "#f1f1f1";
  });
  basketTextContainer.forEach(n => {
    n.style.color = "black";
  });
  OnOff = 1;

  buttons.forEach(l => {
    l.style.color = "black";
    l.style.border = "1px solid black";
  });

searchbar.style.borderBottom = "solid 1px black";
searchbar.style.color = "black";
document.getElementById("searchButton").style.color = "black";

}



});




document.getElementById("HightoLow").addEventListener('click', () => {
 text = document.querySelectorAll("#money");
 sorting = [];
 text.forEach(l => {
  item = parseInt(l.textContent.substring(1))
  sorting.push(item);
});

sorting.sort(function(a, b){return a-b});


amount = sorting.length;


for(j=0;j<amount;j++){
  text.forEach(i => {item = parseInt(i.textContent.substring(1))
  var content = i.parentElement.parentElement.parentElement;
  if(sorting[j] == item ){
        var parent = content.parentNode;
        parent.insertBefore(content, parent.firstChild)
      }
    });
  }
})

document.getElementById("LowtoHigh").addEventListener('click', () => {
text = document.querySelectorAll("#money");
sorting = [];
text.forEach(l => {
 item = parseInt(l.textContent.substring(1))
 sorting.push(item);

});

sorting.sort(function(a, b){return b-a});


amount = sorting.length;


for(j=0;j<amount;j++){
 text.forEach(i => {item = parseInt(i.textContent.substring(1))
 var content = i.parentElement.parentElement.parentElement;
 if(sorting[j] == item ){
       var parent = content.parentNode;
       parent.insertBefore(content, parent.firstChild)       
     }
   });
 }
})

document.getElementById("xbox").addEventListener('click', () => {
  text = document.querySelectorAll("#platform");
  
  text.forEach(l => {
  platform = l.textContent;
  console.log(platform)
  platform = platform.split(" ")[0]

  if(platform=="Xbox"){
    l.parentElement.parentElement.style.display = "";
  }else{
    l.parentElement.parentElement.style.display = "none";
  }
   
 });

 })

 document.getElementById("ps").addEventListener('click', () => {
  text = document.querySelectorAll("#platform");
  
  text.forEach(l => {
  platform = l.textContent;
  console.log(platform)

  if(platform.includes("PS")){
    l.parentElement.parentElement.style.display = "";
  }else{
    l.parentElement.parentElement.style.display = "none";
  }
 });
 })


function moreInfo(e){
  document.getElementById("overlay").style.display = "flex";
  title = e.querySelector("#c_title").textContent
  img = e.querySelector("#gameImage").src
  platform = e.querySelector("#platform").textContent
  acost = e.querySelector("#money").textContent
  desc = e.querySelector("#c_desc").textContent

  buyCon = document.getElementById("buyContainer")

  if(e.querySelector("#oldprice")){
  oldP = e.querySelector("#oldprice").textContent
    g_deal = e.querySelector(".gamedeal").textContent 
    console.log(oldP,g_deal)
    buyCon.querySelector("#mGameDeal").textContent = g_deal;
    buyCon.querySelector("#oldprice").textContent = oldP;
  }else{
    console.log(buyCon.querySelector("#mGameDeal"), buyCon.querySelector("#oldprice"))
    buyCon.querySelector("#mGameDeal").style.display = "none";
    buyCon.querySelector("#oldprice").style.display = "none";
     
  }
  
  buyCon.querySelector("#mTitle").textContent = title;
  buyCon.querySelector("#mgamepic").src = img;
  buyCon.querySelector("#money").textContent = acost;

  createOverLayGames(title)
  
}


function createOverLayGames(e){
  mConsoleContainer = document.getElementById("mConsoleContainer");
  array = filterbyT(e);
  for (i = 0; i < array.length; i++) {
    consoleL = document.createElement('div');
    consoleL.setAttribute("id", "mConsole");
    consoleL.setAttribute("onclick", "otherGame('"+e+"','"+array[i]+"')");
    mConsoleContainer.appendChild(consoleL);
    if(array[i].search("Switch")>0){
      consoleL.setAttribute("style","background:Red;");
    }
    if(array[i].search("Xbox")>=0){
      consoleL.setAttribute("style","background:Green;");
    }
    if(array[i].search("PS")>=0){
      consoleL.setAttribute("style","background: #0575E6; background: -webkit-linear-gradient(to right, #021B79, #0575E6); background: linear-gradient(to right, #021B79, #0575E6)");
    }
    if(array[i] == "PC"){
      consoleL.setAttribute("style","background:#1b2838;");
    }
    consoleL.textContent = array[i];
    
  }
}

function otherGame(e,index){
  console.log(index)
  c = filterbyT(e)
  
}

function overlayoff(e){
  document.getElementById("overlay").style.display = "none";
  mConsoleContainer = document.getElementById("mConsoleContainer");
  mConsole = mConsoleContainer.querySelectorAll('#mConsole')

  for (i = 0; i < mConsole.length; i++) {
    mConsoleContainer.removeChild(mConsole[i])
  }
}

function filterbyT(t){
  filter = t.toUpperCase();
  li = document.getElementsByTagName("li");
  container = document.getElementById("container");
  containerAmount = li.length;
  array = []
  for (i = 0; i < containerAmount; i++) {
    a = li[i].getElementsByTagName("p")[2];
    txtValue = a.textContent || a.innerText;
    if(txtValue.toUpperCase().indexOf(filter) > -1) {
      a = li[i].getElementsByTagName("p")[0];
      txtValue = a.textContent || a.innerText;
      array.push(txtValue)
    } 
  }
  set = new Set(array)
  array = Array.from(set)
  return array
}

function filterBy(id){
  text = document.querySelectorAll("#platform");
  
  text.forEach(l => {
  platform = l.textContent;

  if(platform.includes(id)){
    l.parentElement.parentElement.style.display = "";
    console.log(l)
  }else{
    l.parentElement.parentElement.style.display = "none";
  }
 });
}


function randomlist() {
  sorting = []
  var currentIndex = document.querySelectorAll("#container");
  var mainbody = document.querySelector("#galContainer");
  
   currentIndex.forEach(l =>{
      sorting.push(l);   
   })
   
  length = sorting.length;
  for(i=0;length>i;i++) {
  
    randomIndex = Math.floor(Math.random() * i + 1);
    sorting[i] = sorting[randomIndex];

    mainbody.insertBefore(sorting[i].parentElement,mainbody.firstChild);       

    // And swap it with the current element.
    // temporaryValue = array[currentIndex];
    // array[currentIndex] = array[randomIndex];
    // array[randomIndex] = temporaryValue;

    // console.log(array[randomIndex] )
  }
}

function ShowSlider() {
  buttonOnOff = 1
  leftArrow = document.createElement('i');
  var button = document.querySelector('#inOrout');
  var slider = document.querySelector('slider');

  if(buttonOnOff == 0){
   // slider.classList.add("animated_Right");
    button.createElement("i").classList.add("fas fa-chevron-right");
    buttonOnOff = 1;
  }
  if(buttonOnOff == 1){
   // slider.classList.add("animated_left");
    button.createElement("i").classList.add("fas fa-chevron-left");
    buttonOnOff= 0;
  }
}



// var ToggleBasket = 0;
// function Toggles(){
//   if(ToggleBasket == 0){
//     document.getElementById("main-body-container").style.display = "none";
//     document.getElementById("mainbodyBasket").style.display = "";
//     ToggleBasket = 1;
//   }
//   else if(ToggleBasket == 1){
//     document.getElementById("main-body-container").style.display = "";
//     document.getElementById("mainbodyBasket").style.display = "none";
//     ToggleBasket = 0;
//   }
// }



// function basketAmount(event){ 

// var f = event.target.parentNode.value;
// loop = parseInt(event.target.parentNode.childNodes[8].value)

// if(loop>0){
//   for(i=0;i<loop;i++){
//     addingItemsTObasket();
//   }
// }else{
//   addingItemsTObasket();
// }

// if (loop == 'undefined' && loop == null){
//   addingItemsTObasket();
// }

// }


// function addingItemsTObasket(){
// var textcontainer = event.target.parentNode.parentNode;
//   text = textcontainer.textContent;


//   n = text.search("Buy")
//   rest = text.slice(0,n);

//   l = rest.search("£")
//   title = text.slice(0,l);
//   price = rest.slice(l);
  

//   var imagecontainer = event.target.parentNode.parentNode.childNodes;
//   image = imagecontainer[1].childNodes[1].src;

//   targets = event.target.parentNode;


//   var mainbodyBasket = document.getElementById("mainbodyBasket");

//   li = document.createElement("li");
//   mainbodyBasket.appendChild(li)

//   div1 = document.createElement("div");
//   div1.id = "basketContainer";
//   mainbodyBasket.lastChild.appendChild(div1)

//   div2 = document.createElement("div");
//   div2.id = "basketImageContainer";  

//   div3 = document.createElement("div");
//   div3.id = "basketTextContainer";  
  
//   mainbodyBasket.lastChild.lastChild.appendChild(div2)

//   img = document.createElement("img")
//   img.src = image;
//   img.style.maxWidth = "190px";
//   img.style.maxHeight = "190px";

//   mainbodyBasket.lastChild.lastChild.lastChild.appendChild(img)



//   mainbodyBasket.lastChild.lastChild.appendChild(div3)

//   txt = document.createElement("h1")
//   txt.textContent = title;

//   p = document.createElement("p")
//   p.id = "money";
//   p.textContent = price;

//   br = document.createElement("br")

//   console.log(mainbodyBasket.children.length);
//   // if(mainbodyBasket.childNodes == 0){
    
//   // }else
//   button1 = document.createElement("button1")
//   button1.className = "openbtn";
//   button1.id = "Baskbutton";
//   button1.textContent = "Buy Now";
//   button1.onclick = function(){
//     basketAmount(event);
//   }




//   button2 = document.createElement("button2")
//   button2.textContent = "Remove";
//   button2.className = "openbtn";
//   button2.id = "baskRemove";
//   button2.onclick = function(){
//     removeFromBasket(event);

//   }



//   mainbodyBasket.lastChild.lastChild.lastChild.appendChild(txt)
//   mainbodyBasket.lastChild.lastChild.lastChild.appendChild(p)
//   mainbodyBasket.lastChild.lastChild.lastChild.appendChild(br)
//   mainbodyBasket.lastChild.lastChild.lastChild.appendChild(button1)
//   mainbodyBasket.lastChild.lastChild.lastChild.appendChild(button2)

//   Amounts = parseInt(document.getElementById("basketAmount").textContent)
//   Amounts++;
//   document.getElementById("basketAmount").innerHTML = Amounts;

//   if(Amounts==0){
//     p = document.createElement("p")
//     p.id = "AmountBasketMsg";
//     p.textContent = "You have nothing in your Basket";
//     document.querySelector("#mainbodyBasket").appendChild(p);
//     }else{
//       if(document.getElementById("AmountBasketMsg") == null){
//         return
//       }else{
//         document.getElementById("AmountBasketMsg").remove();
//       }
//     }

// event.target.textContent = "In Basket";
// event.target.onclick = function(){
//   Toggles();
// }


// }



// function removeFromBasket(event){
// event.target.parentNode.parentNode.parentNode.remove()

// Amounts = parseInt(document.getElementById("basketAmount").textContent)
// Amounts = Amounts -1;
// document.getElementById("basketAmount").innerHTML = Amounts;

// if(Amounts==0){
//   p = document.createElement("p")
//   p.id = "AmountBasketMsg";
//   p.textContent = "You have nothing in your Basket";
//   document.querySelector("#mainbodyBasket").appendChild(p);
//   }else{
//     if(document.getElementById("AmountBasketMsg") == null){
//       return
//     }else{
//       document.getElementById("AmountBasketMsg").remove();
//     }
//   }


// }

// window.onload = function amountLoad() { 
// Amounts = parseInt(document.getElementById("basketAmount").textContent);

// if(Amounts==0){
//   p = document.createElement("p")
//   p.id = "AmountBasketMsg";
//   p.textContent = "You have nothing in your Basket";
//   document.querySelector("#mainbodyBasket").appendChild(p);
//   }else{
//     if(document.getElementById("AmountBasketMsg") == null){
//       return
//     }else{
//       document.getElementById("AmountBasketMsg").remove();
//     }
//   }
// }
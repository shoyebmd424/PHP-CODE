let selectdiv=document.getElementsByClassName('select');
var addtocartbtn = document.getElementsByClassName("cardbtn");
var noti = document.querySelector(".noti");
for (but of addtocartbtn) {
    but.addEventListener("click", (e) => {
        var add = Number(noti.getAttribute('data-count') || 0);
        noti.setAttribute('data-count', add + 1);
        noti.classList.add("zero");
        // copy paste content   
       select=document.querySelector(".select")
        noti.onclick = () => {
                select.classList.toggle("display");
            }
    })
}
let main_container = document.getElementsByTagName("tbody")[0];
let quantity = document.getElementsByClassName("num");
let remove=document.getElementsByClassName("remove");
for (let i = 0; i < addtocartbtn.length; i++) {
    addtocartbtn[i].addEventListener('click', addtocart);
  }

  function addtocart(event) {
    let btn = event.target;
    let btn_parent = btn.parentElement
   console.log(btn_parent.parentElement.children[0].src)
     let itemimage = btn_parent.parentElement.children[0].src
    // console.log(btn_grandpa.children[0].src);
    let itemname = btn_parent.children[0].children[0].innerText
    let itemprice = btn_parent.children[0].children[1].innerText
   let itemcontainer = document.createElement('tr');
   itemcontainer.innerHTML=` <th scope="row"><img src="${itemimage}" style="width: 100px;height: 100px;border-radius: 50%;"></th>
   <td>
       <h3 class="item-name">${itemname}</h3>
   </td>
   <td class="item-price">
       <h3>${itemprice}</h3>
   </td>
   <td><input type="number" class="num" value="1"></td>
   <td class="total-price">
       <h3>${itemprice.replace('₹/-', '')}</h3>
   </td>
   <td><button  class="btn remove btn-outline-danger">Remove</button></td>`
   main_container.append(itemcontainer)

   for (let i = 0; i < quantity.length; i++) {
    quantity[i].addEventListener('change', updatotal);
  }

  for (let i = 0; i < remove.length; i++) {
    remove[i].addEventListener('click', removeitem);
  }

  globaltotal();
  }
 
  

  function updatotal(event) {
    number_of_items = event.target;
    number_of_items_parent = number_of_items.parentElement.parentElement;
    price_fields = number_of_items_parent.getElementsByClassName("item-price")[0]
    total_price = number_of_items_parent.getElementsByClassName("total-price")[0]
    price_fields_content = price_fields.children[0].innerText.replace('₹/-', '');
    total_price.children[0].innerText = number_of_items.value * price_fields_content;
    if (isNaN(number_of_items.value) || number_of_items.value <= 0) {
        number_of_items.value = 1;
        total_price.children[0].innerText=price_fields.children[0].innerText.replace('₹/-', '');
      }

   
    globaltotal();
  }

  function globaltotal(){
    let totalvalue=0;
      let grandtotal=document.getElementsByClassName("total-global-price")[0];
      let total_price=document.getElementsByClassName("total-price");
    //   grandtotal.innerText =total_price[0].innerText.replace('₹/-','');
      
    for (let i = 0; i < total_price.length; i++) {
     total=Number(total_price[i].innerText.replace('₹/-',''));
     totalvalue+=total;
    }
    grandtotal.innerText=totalvalue+"₹/-";
    console.log(totalvalue);
   
  }

  function removeitem(event){
    removebtn=event.target
    removebtn.grandpa=removebtn.parentElement.parentElement;
    removebtn.grandpa.remove();
    globaltotal();

   }
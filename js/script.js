"use strict"


document.querySelector('.in__button').addEventListener('click', inButton)


let List = [];
let b = document.createElement('div');  
let a = document.createElement('div');

if (localStorage.getItem('todo')) {
  List = JSON.parse(localStorage.getItem('todo'));
  ea();
}


function inButton() {
  let inInput = document.querySelector('.in__input').value; 
  let temp = {};
  temp.todo = inInput;
  let i = List.length;
  List[i] = temp;
  console.log(List)
  a.innerHTML += inInput + '<br>';
  ait();
  ea();
  localStorage.setItem('todo', JSON.stringify(List))
};


function ea() {
  let ea ='';
  for (let key in List) {
    ea += List[key].todo + '<br>';

  }
    b.classList.add('ea__out-item');
    b.innerHTML = ea;
    document.querySelector('.ea__out').appendChild(b);
}


function ait() {
    a.classList.add('ait__out-item');
    
    document.querySelector('.ait__out').appendChild(a);
}

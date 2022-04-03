"use strict"


document.querySelector('.in__button').addEventListener('click', inButton)


let List = [];
let b = document.createElement('div');
let a = document.createElement('div');
let userid = document.querySelector('.user-id').innerHTML;

console.log(userid);

if (localStorage.getItem(userid)) {
  List = JSON.parse(localStorage.getItem(userid));
  ea();
}




const abuse = ["дурак", "хач", "осел", "аутист", "гей"];
let text;

function blocklist() {
  console.log
  let filter = document.querySelector('.filter').value;
  console.log(filter);
  for (let i = 0; i < abuse.length; i++) {
    while (filter.indexOf(abuse[i]) != -1) {
      filter = filter.replace(abuse[i], 'запрещенное слово');

    }
  }
  text = filter;
}






function inButton() {
  blocklist();
  let inInput = text;



  let temp = {};
  temp.todo = inInput;
  let i = List.length;
  List[i] = temp;
  console.log(List)
  a.innerHTML += inInput + '<br>';
  ait();
  if (text != "запрещенное слово") {
    ea();
    localStorage.setItem(userid, JSON.stringify(List))
  }
};


function ea() {
  let ea = '';
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


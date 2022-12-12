/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
var balance = document.getElementById('balance');
var money_plus = document.getElementById('money-plus');
var money_minus = document.getElementById('money-minus');
var list = document.getElementById('list');
var form = document.getElementById('form');
var text = document.getElementById('text');
var amount = document.getElementById('amount');

// const dummyTransactions = [
//     {id: 1, text: 'flowers', amount: -20.00},
//     {id: 2, text: 'salary', amount: 300.00},
//     {id: 3, text: 'Book', amount: -10.00},
//     {id: 4, text: 'Camera', amount: 150.00}
// ];

var localStroageTransactions = JSON.parse(localStorage.getItem('transactions'));
var transactions = localStorage.getItem('transactions') !== null ? localStroageTransactions : [];

// Add transaction
function addTransaction(e) {
  e.preventDefault();
  if (text.value.trim() === '' || amount.value.trim() === '') {
    alert('Please add a item and amount'); // add alert to UI later
  } else {
    var transaction = {
      id: generateID(),
      text: text.value,
      amount: +amount.value
    };
    transactions.push(transaction);
    addTransactionDOM(transaction);
    updateValues();
    updateLocalStorage();
    text.value = '';
    amount.value = '';
  }
}

// Generate random ID
function generateID() {
  return Math.floor(Math.random() * 100000000);
}

// Add tranactios to DOM list
function addTransactionDOM(transaction) {
  //Get sign
  var sign = transaction.amount < 0 ? '-' : '+';
  var item = document.createElement('li');

  // Add class based on value
  item.classList.add(transaction.amount < 0 ? 'minus' : 'plus');
  item.innerHTML = "\n        ".concat(transaction.text, "<span>").concat(sign).concat(Math.abs(transaction.amount), "\n        </span> <button class=\"delete-btn\" onclick=\"removeTransaction(").concat(transaction.id, ")\"><i class=\"far fa-trash-alt\"></i></button>\n    ");
  list.appendChild(item);
}

// update the balance, income and expense
function updateValues() {
  var amounts = transactions.map(function (transaction) {
    return transaction.amount;
  });
  var total = amounts.reduce(function (acc, item) {
    return acc += item;
  }, 0).toFixed(2);
  var income = amounts.filter(function (item) {
    return item > 0;
  }).reduce(function (acc, item) {
    return acc += item;
  }, 0).toFixed(2);
  var expense = (amounts.filter(function (item) {
    return item < 0;
  }).reduce(function (acc, item) {
    return acc += item;
  }, 0) * -1).toFixed(2);
  balance.innerText = "$".concat(total);
  money_plus.innerText = "$".concat(income);
  money_minus.innerText = "$".concat(expense);
}

// Init app
function init() {
  list.innerHTML = '';
  transactions.forEach(addTransactionDOM);
  updateValues();
}

// remove tranasction by ID
function removeTransaction(id) {
  transactions = transactions.filter(function (transaction) {
    return transaction.id !== id;
  });
  updateLocalStorage();
  init();
}

// Update local storage transactions
function updateLocalStorage() {
  localStorage.setItem('transactions', JSON.stringify(transactions));
}

// init app (initiate app)
init();
form.addEventListener('submit', addTransaction);
/******/ })()
;
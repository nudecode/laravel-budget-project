<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- CSS only -->
        <script
            src="https://kit.fontawesome.com/1e6705f353.js"
            crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" href="/css/app.css" />
        <link rel="stylesheet" href="/css/style.css" />
        <title>Simple Budget</title>
    </head>
    <body>
        <h2>
            <span><i class="fas fa-dollar-sign"></i></span> Budget Tracker
        </h2>

        <div class="container">
            <div class="alert"></div>
            <h4>Your Balance</h4>
            <h1 id="balance">$0.00</h1>

            <div class="inc-exp-container">
                <div>
                    <h4>Income</h4>
                    <p id="money-plus" class="money plus">$0.00</p>
                </div>
                <div>
                    <h4>Expense</h4>
                    <p id="money-minus" class="money minus">-$0.00</p>
                </div>
            </div>

            <h3>
                <span><i class="far fa-edit"></i></span> Add New Budget Item
            </h3>
            <form id="form">
                <div class="form-control">
                    <label for="text">Item</label>
                    <input type="text" id="text" placeholder="Enter item..." />
                </div>
                <div class="form-control">
                    <label for="amount"
                        >Amount <br />
                        (negative - expense, positive - income)</label
                    >
                    <input
                        type="number"
                        id="amount"
                        placeholder="Enter amount..."
                    />
                </div>
                <button class="btn">Add Item</button>
            </form>

            <h3>
                <span><i class="fas fa-receipt"></i></span> Budget Items
            </h3>
            <!-- change to history when date functionality has been added-->
            <ul id="list" class="list">
                <!-- <li class="minus">Cash<span>-$400</span><button class="delete-btn">x</button></li> -->
            </ul>
        </div>

        <script src="/js/main.js"></script>
    </body>
</html>

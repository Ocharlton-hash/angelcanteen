<div>
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 95%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: ;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 6px 6px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 200px; /* Same as the width of the sidenav */
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.Cart-Items{
 margin: auto;
 width: 90%;
 height: 30%;
 display: flex;
 justify-content: space-between;
 align-items: center;
}
.image-box{
 width: 15%;
 text-align: center;
}
.about{
 height: 100%;
}
.title{
 padding-top: 5px;
 line-height: 10px;
 font-size: 32px;
 font-family: ‘Open Sans’;
 font-weight: 800;
 color: #202020;
}
.subtitle{
 line-height: 10px;
 font-size: 18px;
 font-family: ‘Open Sans’;
 font-weight: 600;
 color: #909090;
}
Preview:

Step 4: Creating a counter
HTML:
<div class=”counter”>
 <div class=”btn”>+</div>
 <div class=”count”>2</div>
 <div class=”btn”>-</div>
 </div>
CSS:
.counter{
 width: 15%;
 display: flex;
 justify-content: space-between;
 align-items: center;
}
.btn{
 width: 40px;
 height: 40px;
 border-radius: 50%;
 background-color: #d9d9d9;
 display: flex;
 justify-content: center;
 align-items: center;
 font-size: 20px;
 font-family: ‘Open Sans’;
 font-weight: 900;
 color: #202020;
 cursor: pointer;
}
.count{
 font-size: 20px;
 font-family: ‘Open Sans’;
 font-weight: 900;
 color: #202020;
}
Preview:

Step 5: Adding a price section
HTML:
<div class=”prices”>
 <div class=”amount”>$2.99</div>
 <div class=”save”><u>Save for later</u></div>
 <div class=”remove”><u>Remove</u></div>
 </div>
CSS:
.prices{
 height: 100%;
 text-align: right;
}
.amount{
 padding-top: 20px;
 font-size: 26px;
 font-family: ‘Open Sans’;
 font-weight: 800;
 color: #202020;
}
.save{
 padding-top: 5px;
 font-size: 14px;
 font-family: ‘Open Sans’;
 font-weight: 600;
 color: #1687d9;
 cursor: pointer;
}
.remove{
 padding-top: 5px;
 font-size: 14px;
 font-family: ‘Open Sans’;
 font-weight: 600;
 color: #E44C4C;
 cursor: pointer;
}
Preview:

Step 6: Duplicate cart item
Follow the steps from 3 to 5 and add new details.

Step 7: Creating a checkout section
HTML:
<hr> 
 <div class=”checkout”>
 <div class=”total”>
 <div>
 <div class=”Subtotal”>Sub-Total</div>
 <div class=”items”>2 items</div>
 </div>
 <div class=”total-amount”>$6.18</div>
 </div>
 <button class=”button”>Checkout</button>
 </div>
CSS:
hr{
 width: 66%;
 float: right;
 margin-right: 5%;
}
.checkout{
 float: right;
 margin-right: 5%;
 width: 28%;
}
.total{
 width: 100%;
 display: flex;
 justify-content: space-between;
}
.Subtotal{
 font-size: 22px;
 font-family: ‘Open Sans’;
 font-weight: 700;
 color: #202020;
}
.items{
 font-size: 16px;
 font-family: ‘Open Sans’;
 font-weight: 500;
 color: #909090;
 line-height: 10px;
}
.total-amount{
 font-size: 36px;
 font-family: ‘Open Sans’;
 font-weight: 900;
 color: #202020;
}
.button{
 margin-top: 5px;
 width: 100%;
 height: 40px;
 border: none;
 background: linear-gradient(to bottom right, #B8D7FF, #8EB7EB);
 border-radius: 20px;
 cursor: pointer;
 font-size: 16px;
 font-family: ‘Open Sans’;
 font-weight: 600;
 color: #202020;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<div class="sidenav">
  <a href="#">Voucher</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

<div class="card">
  <h1>Breakfast</h1>
  <p class="price">$300</p>
  <p>Brown Stew Chicken or Steam Callalo & Fry Dumplin or Boil Dumplin with Boil Banana & Boil Sweet Potato</p>
  <p><button>Add to Cart</button></p>
</div>
<br>
<div class="card">
  <h1>Lunch</h1>
  <p class="price">$500</p>
  <p>Fry Chicken, Bake Chicken, Curry Chicken with Rice & Peas</p>
  <p><button>Add to Cart</button></p>
</div>
<br>

<div class="card">
  <h1>Snacks</h1>
  <p class="price">$300</p>
  <p>Buritto, Vegan Wrap, French Fries, Hot Dog, Patty, Cheese Taco</p>
  <p><button>Add to Cart</button></p>
</div>



</body>
</div>

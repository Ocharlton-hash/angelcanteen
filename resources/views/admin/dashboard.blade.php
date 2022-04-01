<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        {{_('Dashboard')}}
        </h2>
    </x-slot>

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
  <a href="{{route ('admin.voucher')}}">Voucher</a>
  <a href="#">Account Details</a>
  <a href="#">Contact</a>
</div>

<h2 style="text-align:center">Voucher Cards</h2>

<div class="card">
  <h1>Breakfast Voucher</h1>
  <p class="price">$300</p>
  <p>Tea or Proidge Added</p>
  <p>Voucher Detail (3567)</p>
</div>
<br>
<div class="card">
  <h1>Lunch Voucher</h1>
  <p class="price">$500</p>
  <p>Juice Added</p>
  <p>Voucher Detail (8768)</p>
</div>
<br>
<div class="card">
  <h1>Snack Voucher</h1>
  <p class="price">$300</p>
  <p>Juicd Added</p>
  <p>Voucher Detail (2807)</p>
</div>
</body>
</div>

</x-app-layout>
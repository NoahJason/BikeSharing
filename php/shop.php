<?php
require("../inc/functions.php");
?>

<head>
    <?php HeadTag(); ?>
    <link rel="stylesheet" href="../css/shop.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ac7a4b981f.js" crossorigin="anonymous"></script>
</head>
<body> 

<?php
    navbar();
?>  
<div class="mt-12 flex justify-between mb-8">
    <h2 class="text-2xl mx-16 font-semibold">Shop for bikes</h2>
    <div class="mx-16">
      <span class="mr-4">6 items</span>
      <select id="dropdown" class="py-6">
        <option disabled selected value class="bg-white p-8">Sort by</option>
        <option>Product Type</option>
        <option>Bestsellers</option>
        <option>Lowest Price</option>
        <option>Highest Price</option>
        <option>Bestsellers</option>
      </select>
    </div>
  </div>
  
  <div class="grid lg:grid-cols-4 sm:grid-cols-1 md:grid-cols-2 mx-16 gap-8">
    <div class="flex flex-col bg-gray-100">
      <img src=".././img/bike-1.png" class="fietspics" alt="Fiets zwart">
      <div class="hover:text-blue-800 hover:underline flex flex-col mx-2 mt-4 mb-3">
        <a href="#" class="text-lg font-medium">Fiets black</a>
        <a href="#" class="font-light default:text-gray-900">Electrische fiets</a>
      </div>
      <button class="mx-2 mb-3 max-w-max bg-white border rounded hover:border-gray-600 flex justify-between p-2">
        <span class="mx-4 text-sm">Add to Cart</span>
        <span class="mx-4 text-sm">$1600</span>
      </button>
    </div>
    
    <div class="flex flex-col bg-gray-100">
      <img src=".././img/bike-2.png" class="fietspics" alt="fiets grijs">
      <div class="hover:text-blue-800 hover:underline flex flex-col mx-2 mt-4 mb-3">
        <a href="#" class="text-lg font-medium">fiets gray</a>
        <a href="#" class="font-light default:text-gray-900">Electrische fiets</a>
      </div>
      <button class="mx-2 mb-3 max-w-max bg-white border rounded hover:border-gray-600 flex justify-between p-2">
        <span class="mx-4 text-sm">Add to Cart</span>
        <span class="mx-4 text-sm">$1800</span>
      </button>
    </div>
    
    <div class="flex flex-col bg-gray-100">
      <img src=".././img/bike-3.png" class="fietspics" alt="fiets groen">
      <div class="hover:text-blue-800 hover:underline flex flex-col mx-2 mt-4 mb-3">
        <a href="#" class="text-lg font-medium">Bike green</a>
        <a href="#" class="font-light default:text-gray-900">Electrische fiets</a>
      </div>
      <button class="mx-2 mb-3 max-w-max bg-white border rounded hover:border-gray-600 flex justify-between p-2">
        <span class="mx-4 text-sm">Add to Cart</span>
        <span class="mx-4 text-sm">$1800</span>
      </button>
    </div>
    
    <div class="flex flex-col bg-gray-100">
      <img src=".././img/bike-4.png" class="fietspics" alt="fiets light groen">
      <div class="hover:text-blue-800 hover:underline flex flex-col mx-2 mt-4 mb-3">
        <a href="#" class="text-lg font-medium">Bike light green</a>
        <a href="#" class="font-light default:text-gray-900">Standaard fiets</a>
      </div>
      <button class="mx-2 mb-3 max-w-max bg-white border rounded hover:border-gray-600 flex justify-between p-2">
        <span class="mx-4 text-sm">Add to Cart</span>
        <span class="mx-4 text-sm">$1400</span>
      </button>
    </div>
    
    <div class="flex flex-col bg-gray-100">
      <img src=".././img/bike-5.jpg" class="fietspics" alt="fiets donker groen">
      <div class="hover:text-blue-800 hover:underline flex flex-col mx-2 mt-4 mb-3">
        <a href="#" class="text-lg font-medium">Bike dark green</a>
        <a href="#" class="font-light default:text-gray-900">Standaard fiets</a>
      </div>
      <button class="mx-2 mb-3 max-w-max bg-white border rounded hover:border-gray-600 flex justify-between p-2">
        <span class="mx-4 text-sm">Add to Cart</span>
        <span class="mx-4 text-sm">$700</span>
      </button>
    </div>
    
    <div class="flex flex-col bg-gray-100">
      <img src=".././img/bike-6.webp" class="fietspics" alt="fiets blauw">
      <div class="hover:text-blue-800 hover:underline flex flex-col mx-2 mt-4 mb-3">
        <a href="#" class="text-lg font-medium">Bike blue</a>
        <a href="#" class="font-light default:text-gray-900">Standaard fiets</a>
      </div>
      <button class="mx-2 mb-3 max-w-max bg-white border rounded hover:border-gray-600 flex justify-between p-2">
        <span class="mx-4 text-sm">Add to Cart</span>
        <span class="mx-4 text-sm">$800</span>
      </button>
    </div>
  </div>
  
</body>
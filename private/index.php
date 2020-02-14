<?php
include 'includes/head.php';
?>
<body onload="loadImages()">
   <div class="nav d-flex">
       <div class="col px-0 d-flex">
           <select id="Sym" onchange="loadImages()">
               <option value="[SP500]">[SP500]</option>
               <option value="[NQ100]">[NQ100]</option>
               <option value="GOLD">GOLD</option>
           </select>
           <select id="TF_high" onchange="loadImages()" class="ml-auto">
               <option value="43200">Havi</option>
               <option value="10080">Heti</option>
               <option value="1440">Napi</option>
               <option value="240">H4</option>
               <option value="60">H1</option>
               <option value="15">M15</option>
               <option value="5">M5</option>
           </select>
       </div>
       <div class="col px-0 d-flex">
           <select id="TF_mid" onchange="loadImages()" class="ml-auto">
               <option value="43200">Havi</option>
               <option value="10080">Heti</option>
               <option value="1440">Napi</option>
               <option value="240">H4</option>
               <option value="60">H1</option>
               <option value="15">M15</option>
               <option value="5">M5</option>
           </select>
       </div>
       <div class="col px-0 d-flex">
           <select id="TF_lo" onchange="loadImages()" class="ml-auto">
               <option value="43200">Havi</option>
               <option value="10080">Heti</option>
               <option value="1440">Napi</option>
               <option value="240">H4</option>
               <option value="60">H1</option>
               <option value="15">M15</option>
               <option value="5">M5</option>
           </select>
       </div>
   </div>
   <div class="images d-flex">
       <div id="img_high" class="col px-0"></div>
       <div id="img_mid" class="col px-0"></div>
       <div id="img_lo" class="col px-0"></div>
   </div>

   <script>
       const loadImages = () => {
          let Sym = document.getElementById("Sym").value;
          let TF_high = document.getElementById("TF_high").value;
          let TF_mid = document.getElementById("TF_mid").value;
          let TF_lo = document.getElementById("TF_lo").value;
          document.getElementById("img_high").innerHTML = 
            '<img src="images/TSQ-'+ Sym +'-'+ TF_high +'.jpg" alt="tsq" class="w-100 img">';
          document.getElementById("img_mid").innerHTML = 
            '<img src="images/TSQ-'+ Sym +'-'+ TF_mid +'.jpg" alt="tsq" class="w-100 img">';
          document.getElementById("img_lo").innerHTML = 
            '<img src="images/TSQ-'+ Sym +'-'+ TF_lo +'.jpg" alt="tsq" class="w-100 img">';
       }
   </script>
</body>
</html>

    
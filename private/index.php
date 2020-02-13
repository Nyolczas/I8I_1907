<?php
include 'includes/head.php';
?>
<body onload="loadImages()">
   <div class="nav d-flex">
       <div class="col d-flex">
           <select id="Sym" onchange="loadImages()">
               <option value="[SP500]">[SP500]</option>
               <option value="[NQ100]">[NQ100]</option>
               <option value="GOLD">GOLD</option>
           </select>
           <select id="TF_high" onchange="loadImages()">
               <option value="43200">43200</option>
               <option value="10080">10080</option>
               <option value="1440">1440</option>
               <option value="240">240</option>
               <option value="60">60</option>
               <option value="15">15</option>
               <option value="5">5</option>
           </select>
       </div>
       <div class="col">
           <select id="TF_mid" onchange="loadImages()">
               <option value="43200">43200</option>
               <option value="10080">10080</option>
               <option value="1440">1440</option>
               <option value="240">240</option>
               <option value="60">60</option>
               <option value="15">15</option>
               <option value="5">5</option>
           </select>
       </div>
       <div class="col">
           <select id="TF_lo" onchange="loadImages()">
               <option value="43200">43200</option>
               <option value="10080">10080</option>
               <option value="1440">1440</option>
               <option value="240">240</option>
               <option value="60">60</option>
               <option value="15">15</option>
               <option value="5">5</option>
           </select>
       </div>
   </div>
   <div class="images d-flex">
       <div id="img_high" class="col"></div>
       <div id="img_mid" class="col"></div>
       <div id="img_lo" class="col"></div>
   </div>

   <script>
       const loadImages = () => {
          let Sym = document.getElementById("Sym").value;
          let TF_high = document.getElementById("TF_high").value;
          let TF_mid = document.getElementById("TF_mid").value;
          let TF_lo = document.getElementById("TF_lo").value;
          document.getElementById("img_high").innerHTML = 
            '<img src="images/TSQ-'+ Sym +'-'+ TF_high +'.jpg" alt="tsq" class="img">'
       }
   </script>
</body>
</html>

    
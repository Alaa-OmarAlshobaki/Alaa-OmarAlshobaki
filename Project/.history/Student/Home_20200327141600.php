<?php
include "header.php";

?>
<link rel="stylesheet" type="text/css" href="../dist/loading-bar.css"/>
<script type="text/javascript" src="../dist/loading-bar.js"></script>
<style>
  .ldBar-label {
    color: #09f;
    font-family: 'varela round';
    font-size: 2.5em;
    font-weight: 900;
  }
  .ldBar path.mainline {
    ...
    /* styling of bar omitted */
</style>
<body>
<div class="ldBar" data-value="50">
</div>
<div
  data-preset="fan"
  class="ldBar label-center"
  data-value="35"
></div>

<div
  class="ldBar label-center"
  data-value="35"
  data-preset="circle"
></div>
    
</body>
</html>
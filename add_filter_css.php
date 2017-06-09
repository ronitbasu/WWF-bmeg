
<head>

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.css">
  <style type="text/css">
    .ui.menu {
    font-size: 1.7rem;
  }
  </style>
</head>
<body>
<div class="ui menu">
  <a class="item">
    Filters
  </a>
      <div class="ui simple dropdown link item right">
    <span class="text">Material Type</span>
    <i class="dropdown icon"></i>
    <div class="menu">
      <div class="item">
        <span class="text" onclick="myFilter()">General Construction Material</span>
        <script>

function myFilter(){
document.getElementById("table").innerHTML  = "<?php php_func();?>";
}

function myFilterb(){
document.getElementById("table").innerHTML  = "<?php php_funcb();?>";
}

function myFilterc(){
document.getElementById("table").innerHTML  = "<?php php_funcc();?>";
}

function myFilterd(){
document.getElementById("table").innerHTML  = "<?php php_funcd();?>";
}

function myFiltere(){
document.getElementById("table").innerHTML  = "<?php php_funce();?>";
}

function myFilterev(){
document.getElementById("table").innerHTML  = "<?php php_func_env();?>";
}

</script>
      </div>
      <div class="item" onclick="myFilterb()">Wall Material</div>
      <div class="item" onclick="myFilterc()"> Wood and Timber</div>
      <div class="item" onclick="myFilterd()">Roofing Material</div>
      <div class="item" onclick="myFiltere()">Finishing Material</div>
    </div>
  </div>
   <div class="ui simple dropdown link item">
    <span class="text">Environmental Benefits?</span>
    <i class="dropdown icon"></i>
    <div class="menu">
      <div class="item">
        <div class="text" onclick="myFilterev()">Yes</div>
      </div>
      <div class="item">No</div>
    </div>
  </div>
</div>
</body>




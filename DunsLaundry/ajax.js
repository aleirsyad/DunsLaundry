function kiloan(){
    //add event when title is typed
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
      if((xmlhttp.readyState == 4) && (xmlhttp.status == 200)){
        jenis.innerHTML = xmlhttp.responseText;
      }
    }
    xmlhttp.open('GET', 'kiloan.php', true);
    xmlhttp.send();
  }

  function satuan(){
    //add event when title is typed
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
      if((xmlhttp.readyState == 4) && (xmlhttp.status == 200)){
        jenis.innerHTML = xmlhttp.responseText;
      }
    }
    xmlhttp.open('GET', 'satuan.php', true);
    xmlhttp.send();
  }
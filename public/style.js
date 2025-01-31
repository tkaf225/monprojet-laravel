  // BARRE LATERAL

  function openNav() {
    document.getElementById("mySidenav").style.width = "280px";
    // document.getElementById("mySidenav").style.display = "block";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    document.getElementById("content").style.display="none";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    // document.getElementById("mySidenav").style.display = "none";
    document.body.style.backgroundColor = "#f2f6ff";
    document.getElementById("content").style.display="block";
  }

// MODAL RETRAIT
  function openModal() {
    document.getElementById("myModal").style.display="block";
  }
  
  function closeModal() {
    document.getElementById("myModal").style.display = "none";
  }

  window.onclick = function(event) {
    if (event.target == document.getElementById("myModal")) {
      document.getElementById("myModal").style.display = "none";
    }
  }

  // MODAL VIREMENT

  function openModal2() {
    document.getElementById("myModal2").style.display="block";
  }
  
  function closeModal2() {
    document.getElementById("myModal2").style.display = "none";
  }

  window.onclick = function(event2) {
    if (event2.target == document.getElementById("myModal2")) {
      document.getElementById("myModal2").style.display = "none";
    }
  }

  function sms() {
    document.getElementById("sms").style.display="block";
  }

  window.onclick = function(event3) {
    if (event3.target == document.getElementById("sms")) {
      document.getElementById("sms").style.display = "none";
    }
  }

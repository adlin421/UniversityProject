var datetimeClass = document.getElementsByClassName("datetime");

function showDateTime() {
  var currentDate = new Date();
   var options = { day: 'numeric', month: 'numeric', year: 'numeric' , hour:'numeric', minute:'numeric'};
  var datetime = currentDate.toLocaleString('en-MY', options);
  for(i = 0; i < datetimeClass.length; i++){
    datetimeClass[i].innerHTML = "<p>" + datetime + "</p>";
  }

function updateDateTime() {
      showDateTime()
    }
  setInterval(updateDateTime, 30000);
}

function loadDBPage(){
  showDateTime()
  readURL()
}

function readURL(){
  const urlParams = new URLSearchParams(window.location.search);
  const tab = urlParams.get('tab');
  if(tab !== null){
    toggleStock();
  }

  if(tab === 'parcel'){
    openTab(event, 'tab_parcel')
  }
  else if(tab === 'food'){
    openTab(event, 'tab_food')
  }
  else if(tab === 'drink'){
    openTab(event, 'tab_drink')    
  }
}

function openTab(evt, tabName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    if(tabcontent[i].classList.contains("a") && document.getElementById(tabName).classList.contains("a")){
      tabcontent[i].classList.remove("show");
    } else if (!tabcontent[i].classList.contains("a") && !document.getElementById(tabName).classList.contains("a")){
      tabcontent[i].classList.remove("show");
    }
  }

   // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].classList.remove("active");
  }

  document.getElementById(tabName).classList.add("show");
  evt.currentTarget.classList.add("active");


  var x = document.getElementsByClassName("show_datetime");
  for( i = 0; i < x.length; i++){
    x[i].innerHTML = "";
  }
  showDateTime();
  
}


// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

function todrinksite(){
  window.open("drink.php");
}

function toparcelsite(){
  window.open("parcel.php");
}

function tofoodsite(){
  window.open("food.php");
}

function toggleConsole(mode, target){
  if(mode === 'on'){

    document.getElementById(target).classList.add("show");
    document.getElementById("cover_console").classList.add("show");
  }
  else if(mode === 'off'){
    document.getElementById("cover_console").classList.remove("show");
    document.getElementById(target).classList.remove("show");

  }


}

function toggleStock(){
  if(document.getElementById("catalogue").classList.contains("show")){
      document.getElementById("catalogue").classList.remove("show");
      document.getElementById("stock").classList.add("show");

      document.title = "Kiosk Stock";

      document.documentElement.style.setProperty('--secondary-color-accent1', 'rgb(31, 1, 127)');
      document.documentElement.style.setProperty('--primary-color-accent2','whitesmoke');
      document.documentElement.style.setProperty('--primary-color-accent1','floralwhite');

      document.getElementById("username").classList.add("show");
      datetimeClass[1].classList.add("show");
      datetimeClass[0].classList.remove("show");
      showDateTime();

      document.title

  } else{
      document.getElementById("catalogue").classList.add("show");
      document.getElementById("stock").classList.remove("show");

      document.title = "Kiosk Catalogue";

      document.documentElement.style.setProperty('--secondary-color-accent1', 'rgb(20,115,79)');
      document.documentElement.style.setProperty('--primary-color-accent1','whitesmoke');
      document.documentElement.style.setProperty('--primary-color-accent2','floralwhite');

      document.getElementById("username").classList.remove("show");
      datetimeClass[0].classList.add("show");
      datetimeClass[1].classList.remove("show");
      showDateTime();
  }
}
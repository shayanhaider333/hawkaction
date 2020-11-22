
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});

document.getElementById('toggle').addEventListener('click', function() {
  toggle(document.querySelectorAll('.showContent01'));
});
function toggle (elements, specifiedDisplay) {
  var x, y; 

  elements = elements.length ? elements : [elements];
  for (y=0; y < elements.length; y++) {
  x = elements[y];
  
  if (isElementHidden(x)) {
    x.style.display = '';

    if (isElementHidden(x)) {
      x.style.display=specifiedDisplay || 'block';
    }
  }
  else {
    x.style.display='none';
  }
  }
  function isElementHidden (x) {
    return window.getComputedStyle(x, null).getPropertyValue('display') === 'none';
  }
}
//////////////Show-Hide Content///////////////
document.getElementById('toggle2').addEventListener('click', function() {
  toggle(document.querySelectorAll('.showContent02'));
});
function toggle (elements, specifiedDisplay) {
  var x, y; 

  elements = elements.length ? elements : [elements];
  for (y=0; y < elements.length; y++) {
  x = elements[y];
  
  if (isElementHidden(x)) {
    x.style.display = '';

    if (isElementHidden(x)) {
      x.style.display=specifiedDisplay || 'block';
    }
  }
  else {
    x.style.display='none';
  }
  }
  function isElementHidden (x) {
    return window.getComputedStyle(x, null).getPropertyValue('display') === 'none';
  }
}
//////////////Show-Hide Content///////////////
document.getElementById('toggle3').addEventListener('click', function() {
  toggle(document.querySelectorAll('.showContent03'));
});
function toggle (elements, specifiedDisplay) {
  var x, y; 

  elements = elements.length ? elements : [elements];
  for (y=0; y < elements.length; y++) {
  x = elements[y];
  
  if (isElementHidden(x)) {
    x.style.display = '';

    if (isElementHidden(x)) {
      x.style.display=specifiedDisplay || 'block';
    }
  }
  else {
    x.style.display='none';
  }
  }
  function isElementHidden (x) {
    return window.getComputedStyle(x, null).getPropertyValue('display') === 'none';
  }
}
//////////////Show-Hide Content///////////////
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.collapsible');
  var instance = M.Collapsible.init(elems);
  
  var elemss = document.querySelectorAll('.modal');
  var instances = M.Modal.init(elemss);
});

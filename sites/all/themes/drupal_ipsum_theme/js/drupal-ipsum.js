function onDOMContentLoaded() {
  setTimeout(function() {
    Socialite.load( document.getElementById('social') );
    Socialite.activate(document.getElementById('follow-button'), 'twitter');
  }, 100);
}

if (window.addEventListener !== undefined) {
  window.addEventListener('DOMContentLoaded', onDOMContentLoaded, false);
} else {
  window.onload = function() {
    onDOMContentLoaded();
  };
}
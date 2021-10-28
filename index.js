window.addEventListener('DOMContentLoaded', function () {
  var form = document.getElementById('month-sorting');

  form.addEventListener('change', function () {
    form.submit();
  });
});

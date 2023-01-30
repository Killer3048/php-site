const btn = document.querySelector('.form__btn');
btn.addEventListener('click', function() {
    btn.style.width = '40%';
    btn.style.padding = '5px 10px';
    btn.style.backgroundColor = '#6F6F6F';
});

const btnDeleteAll = document.querySelector('.btn__deleteAll');

// Send an AJAX request to retrieve the data
const xhr = new XMLHttpRequest();
xhr.open('GET', 'lib/getData.php', true);
xhr.onreadystatechange = function() {
  if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
    // Parse the data returned by the PHP script
    const data = JSON.parse(xhr.responseText);

    if (data.length > 0) {
      // There is data in the database, show the button
      btnDeleteAll.style.display = 'block';
    } else {
      // There is no data in the database, hide the button
      btnDeleteAll.style.display = 'none';
    }
  }
};
xhr.send();
document.getElementsByName('username')[0].addEventListener('keydown', function(event) {
    if (event.key === 'Enter') {
        event.preventDefault();
        document.getElementsByName('email')[0].focus();
    }
});

document.getElementsByName('email')[0].addEventListener('keydown', function(event) {
    if (event.key === 'Enter') {
        event.preventDefault();
        document.getElementsByName('password')[0].focus();
    }
});

document.getElementsByName('password')[0].addEventListener('keydown', function(event) {
    if (event.key === 'Enter') {
        event.preventDefault();
        document.querySelector('form').submit();
    }
});

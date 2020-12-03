function Login(event) {
    event.preventDefault();
    $.ajax({
        type: 'POST',
        url: '/login',
        data: {
            name: '$'
        }
    });
}
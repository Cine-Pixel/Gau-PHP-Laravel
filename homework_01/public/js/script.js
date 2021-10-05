const sendDelete = (elem) => {
    const id = elem.dataset.id;
    fetch("http://localhost:8000", {
        headers: {
            'Content-Type': 'application/json'
        },
        method: 'DELETE',
        body: JSON.stringify({ "id": id })
    })
        .then(response => window.location = '/')
}

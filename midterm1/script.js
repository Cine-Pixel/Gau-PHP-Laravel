const button = document.getElementById("add-info");

if (button) {
    button.addEventListener("click", (e) => {
        e.preventDefault();

        $.ajax('api.php', {
            type: 'POST',
            data: {
                "first_name": $("#fn").val(),
                "last_name": $("#ln").val(),
                "birth_date": $("#bd").val(),
                "personal_number": $("#pn").val(),
                "position": $("#pos").val(),
                "action": "add"
            },
            success: function (response) {
                let status = JSON.parse(response)['status'];
                if (status === "success") $('#status').text("Success");
                else $("#status").text("Fail");
            }
        })
    })
}

const del_buttons = document.querySelectorAll(".btn-delete");
del_buttons.forEach(btn => {
    btn.addEventListener("click", (e) => {
        e.preventDefault();

        $.ajax('api.php', {
            type: 'POST',
            data: {
                "delete": e.target.dataset.id
            },
            success: function (response) {
                let status = JSON.parse(response)['status'];
                if (status === "success") $('#status').text("Success");
                else $("#status").text("Fail");
                window.location = '/';
            }
        });
    });
});

const edit_buttons = document.querySelectorAll(".btn-save");
edit_buttons.forEach(btn => {
    btn.addEventListener("click", (e) => {
        e.preventDefault();

        data = {
            "edit": e.target.dataset.id,
            "first_name": $(`#fn${e.target.dataset.id}`).val(),
            "last_name": $(`#ln${e.target.dataset.id}`).val(),
            "birth_date": $(`#bd${e.target.dataset.id}`).val(),
            "personal_number": $(`#pn${e.target.dataset.id}`).val(),
            "position": $(`#pos${e.target.dataset.id}`).val(),
        };
        console.log(data);

        $.ajax('api.php', {
            type: 'POST',
            data: {
                "edit": e.target.dataset.id,
                "first_name": $(`#fn${e.target.dataset.id}`).val(),
                "last_name": $(`#fn${e.target.dataset.id}`).val(),
                "birth_date": $(`#fn${e.target.dataset.id}`).val(),
                "personal_number": $(`#fn${e.target.dataset.id}`).val(),
                "position": $(`#fn${e.target.dataset.id}`).val(),
            },
            success: function (response) {
                let status = JSON.parse(response)['status'];
                if (status === "success") $('#status').text("Success");
                else $("#status").text("Fail");
            }
        });
    });
});


const fetch_data = () => {
    $.ajax('api.php', {
        type: 'GET',
        success: function (response) {
            let data = JSON.parse(response)['status'];
            console.log(data);
        }
    });
}
const answers = document.querySelectorAll('input');

answers.forEach(ans => {
    let data = {
        "q": ans.getAttribute("name"),
        "a": ans.getAttribute("value")
    }

    ans.addEventListener("click", () => {
        document.querySelectorAll(`input[name=${data["q"]}]`).forEach(e => e.setAttribute("disabled", true));

        $.ajax('/check-answer.php', {
            type: 'POST',
            data: data,
            success: function (response) {
                let data = JSON.parse(response);
                if (data.is_correct) {
                    let score = document.getElementById("points");
                    score.innerText = parseInt(score.innerText) + 1;
                }
            }
        })
    })
})
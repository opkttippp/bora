async function checkEvent()
{
    let val = document.querySelector("#search").value;
    if (val.length >= 3) {
        const rawResponse = await fetch('/handler.php', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({val})
        });
        const content = await rawResponse.json();
        let output = '';
        for (const cont of content) {
            let Html = '<li class="s">' + cont + '</li>';
            output += Html;
        }

        document.querySelector('.results').innerHTML = output;
        const d = document.querySelector('.results')

        for (let i = 0; i < d.children.length; i++) {
            d.children[i].addEventListener('click', event => {
                addInSearch(event.target.innerText);
            });
        }
    } else {
        document.querySelector('.results').innerHTML = '';
    }
}


function addInSearch(event)
{
    console.log(document.querySelector('#search').value = event);
    document.querySelector('.results').innerHTML = '';

}

document.onclick = function (event) {
    document.querySelector('.results').innerHTML = '';
}








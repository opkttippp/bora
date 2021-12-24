//----------------задание 1---------------------

// function plus(number) {
//     if (typeof number !== 'number') {
//         throw new TypeError;
//     } else if (number > 10 || number < 0) {
//         throw new RangeError;
//     }
//     return console.log(++number);
// }
//
// try {
//     plus(10);
//     {
//     }
// } catch (e) {
//     alert("Ошибка");
//     alert(e.name);
//     alert(e.message);
// }

//----------------задание 2----------------------

// function inc(number) {
//
//     return new Promise(function (resolve, reject) {
//         setTimeout(function () {
//             if (typeof number !== 'number') {
//                 return reject(new TypeError);
//             } else if (number > 10 || number < 0) {
//                 return reject(new RangeError);
//             }
//             return resolve(++number);
//         }, 250);
//     });
// }
//
// inc(10)
//     .then(function (res) {
//         console.log(res);
//     })
//     .catch(function (err) {
//         console.log(err);
//     })
//     .finally(() => {
//         console.log('Promise finished');
//     });

//----------------задание 3----------------------

const requestUrl = 'http://mysite/lib/list';

fetch(requestUrl, {
    method: 'GET',
    headers: {
        'Content-Type': 'application/json'
    }
}).then(response => {
    if (!response.ok) {
        console.log('Error - ' + response.status)
    } else {
        return response.json();
    }
})
.then(postJson => {
    setTimeout(() => {

        let output = '';
        postJson.forEach((post) => {
            let Html = '<div class="container-list">';
            Html += '<p>' + post.name + "</p>";
            Html += '<a href=""><img src = "' + post.img + '" width="200" height="150" alt="ноутбук"></a>';
            Html += '<p>' + post.price + "</p>";
            Html += "</div>";
            output += Html;
        });
    document.getElementsByClassName("container-home")[0].innerHTML = output;
    }, 3000);
})
.catch(error => console.log(error))

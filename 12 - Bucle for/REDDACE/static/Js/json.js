document.querySelector('#').addEventListener('click',traerdatos);
// document.querySelector('#').addEventListener('click',traerdatos());

function traerdatos(){
    // console.log('funciona');
    const xhttp = new XMLHttpRequest();
    xhttp.open('GET', 'donde voy.exe', true);
    xhttp.onreadystatechange = function()
    {
        if (this.readyState == 4 && this.status == 200)
        {
            let datos= JSON.parse(this.responseText);
            let res  = document.querySelector('#');
            res.innerHTML = '';
                for(let item of datos)
                {
                    res.innerHTML +=
                    `
                        <input type="text" value="${item.r1}" />
                    `;
                }
        }
    }

}
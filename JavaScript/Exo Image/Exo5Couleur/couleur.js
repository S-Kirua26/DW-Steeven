function bleu()
{
    // for(let i=0;i<test1.length;i++)
    // {
    //     // test1[i].style.backgroundColor = "blue";
    // }
    test1.style.backgroundColor = "blue";
}

function blanc()
{
    // for(let i=0;i<test1.length;i++)
    // {
    //     test1[i].style.backgroundColor = "white";
    // }
    test1.style.backgroundColor = "white";
}

function rouge()
{
    // for(let i=0;i<test1.length;i++)
    // {
    //     test1[i].style.backgroundColor = "red";
    // }
    test1.style.backgroundColor = "red";
}

function couleur()
{
    if(click == 0)
    {
        bleu();
        click = 1;
    }
    else if (click == 1)
    {
        blanc();
        click = 2;
    }
    else
    {
        rouge();
        click = 0;
    }
}


var test1 = document.getElementById("texte1");
// var test1 = document.getElementsByTagName("h1");

// for(let i=0;i<test1.length;i++)
// {
//     test1[i].addEventListener("click", couleur);
// }
test1.addEventListener("click",couleur);
var click = 0;





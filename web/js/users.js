function adder()
{
    document.getElementById("add").style.display = 'block';
    document.getElementById("check").style.display = 'none';
}


function checker()
{
    document.getElementById("check").style.display = 'block';
    document.getElementById("add").style.display = 'none';
}

function prop()
{
    var EPI = document.getElementById("EPI").value;
    if (EPI == "Corde")
    {
        document.getElementById("type").style.display = "none";
        document.getElementById("autres").style.display = "none";
        document.getElementById("corde").style.display = "block";
    }
    else
    {
        document.getElementById("corde").style.display = "none";
        document.getElementById("type").style.display = "block";
        document.getElementById("autres").style.display = "block";
    }
}

function prop2()
{
    var EPI2 = document.getElementById("EPI2").value;
    if (EPI2 == "Corde")
    {
        document.getElementById("cordes").style.display = "block";
        document.getElementById("casque").style.display = "none";
        document.getElementById("metal").style.display = "none";
        document.getElementById("anneau").style.display = "none";
        document.getElementById("harnais").style.display = "none";
        document.getElementById("divers").style.display = "none";
    }
    else if (EPI2 == "Casque")
    {
        document.getElementById("cordes").style.display = "none";
        document.getElementById("casque").style.display = "block";
        document.getElementById("metal").style.display = "none";
        document.getElementById("anneau").style.display = "none";
        document.getElementById("harnais").style.display = "none";
        document.getElementById("divers").style.display = "none";
    }
    else if (EPI2 == "Equipements Metalliques")
    {
        document.getElementById("cordes").style.display = "none";
        document.getElementById("casque").style.display = "none";
        document.getElementById("metal").style.display = "block";
        document.getElementById("anneau").style.display = "none";
        document.getElementById("harnais").style.display = "none";
        document.getElementById("divers").style.display = "none";
    }
    else if (EPI2 == "Express et Anneau Cousu")
    {
        document.getElementById("cordes").style.display = "none";
        document.getElementById("casque").style.display = "none";
        document.getElementById("metal").style.display = "none";
        document.getElementById("anneau").style.display = "block";
        document.getElementById("harnais").style.display = "none";
        document.getElementById("divers").style.display = "none";
    }
    else if (EPI2 == "Harnais")
    {
        document.getElementById("cordes").style.display = "none";
        document.getElementById("casque").style.display = "none";
        document.getElementById("metal").style.display = "none";
        document.getElementById("anneau").style.display = "none";
        document.getElementById("harnais").style.display = "block";
        document.getElementById("divers").style.display = "none";
    }
    else if (EPI2 == "Divers")
    {
        document.getElementById("cordes").style.display = "none";
        document.getElementById("casque").style.display = "none";
        document.getElementById("metal").style.display = "none";
        document.getElementById("anneau").style.display = "none";
        document.getElementById("harnais").style.display = "none";
        document.getElementById("divers").style.display = "block";
    }
}
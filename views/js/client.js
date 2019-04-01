/*function test()
{
var nm = f.nom.value;
var idd=f.id.value;
var pnm=f.prenom.value;
var pwd1=f.password1.value;
var pwd2=f.password2.value;
var num=f.num.value;
var mail=f.mail.value;
var a = "@";
var pt = ".";
if(idd.length==0)
   {alert("remplir le champ identifiant");}
if(nm.length==0)
	{alert("remplir le champ NOM");}

if(pnm.length==0)
	{alert("remplir le champ prenom");}
if( mail.length == 0 )
{
alert("remplir votre adresse email");
}
if(pwd1.length==0)
	{alert("remplir le champ mot de passe");}
if(pwd1!=pwd2)
	{alert("les 2 mot de passe ne sont pas identiques")}
if(num.length!=8)
	{alert("veuillez donner un numéro valide");}
if(nm.length!=0 && pnm.length!=0 && pwd1==pwd2 && mail.length != 0 && pwd1.length!=0)
{
var prenom = pnm.substring(0,12 );
var nom = nm.substring(0,12);
//alert('Bienvenue ' + prenom + " " + nom ) ;
}

}*/
function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}

function verifMail(champ)
{ var m=f.mail.value;
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(m))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }

 }



function verifpass(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function veriftelephone(champ)
{   var c = f.numero.value;
    
   if(c.length!=8  )
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function verifnom(champ)
{
      var exp = new RegExp("^[a-z\- ]+$","i");
       if(!exp.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }

}


function verifid(champ)
{
      var exp = new RegExp("^[a-z\- ]+$","i");
       if(!exp.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }

}
function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}




function verifcode(champ)
{   var c = f.code.value;
    
   if(c.length!=12  )
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
function verifdelai(champ)
{
    var d = f.delai.value;
   if(d.length!=2)
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